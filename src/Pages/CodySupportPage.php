<?php

namespace CodySupport\FilamentCody\Pages;

use CodySupport\FilamentCody\CodyPlugin;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Section;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\HtmlString;

class CodySupportPage extends Page
{
    protected string $view = 'filament-cody::pages.cody-support';

    protected static ?string $slug = 'cody-support';

    protected static ?int $navigationSort = 100;

    protected Width|string|null $maxContentWidth = Width::Full;

    public ?array $data = [];

    public static function getNavigationGroup(): ?string
    {
        return '🤖 Cody.support';
    }

    public static function getNavigationLabel(): string
    {
        return __('cody::cody.navigation.label');
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-lifebuoy';
    }

    public function getTitle(): string
    {
        return __('cody::cody.page.heading');
    }

    public function mount(): void
    {
        $this->form->fill([
            'type' => null,
            'priority' => 'medium',
        ]);
    }

    public function form(Schema $form): Schema
    {
        $plugin = CodyPlugin::get();

        return $form
            ->schema([
                Section::make(__('cody::cody.form.type_section'))
                    ->schema([
                        Radio::make('type')
                            ->label(__('cody::cody.fields.type.label'))
                            ->options($plugin->getTypes())
                            ->descriptions($this->getTypeDescriptions())
                            ->required()
                            ->live(),
                    ]),

                Section::make(__('cody::cody.form.details_section'))
                    ->schema(fn (Get $get): array => $this->getFieldsForType($get('type'), $plugin))
                    ->visible(fn (Get $get): bool => filled($get('type'))),
            ])
            ->statePath('data');
    }

    protected function getTypeDescriptions(): array
    {
        return collect(__('cody::cody.fields.type.descriptions'))->toArray();
    }

    protected function getFieldsForType(?string $type, CodyPlugin $plugin): array
    {
        $typeConfig = __('cody::cody.types.' . ($type ?? 'support'));

        $fields = [
            TextInput::make('subject')
                ->label($typeConfig['subject_label'] ?? __('cody::cody.fields.subject.label'))
                ->required()
                ->maxLength(255)
                ->placeholder($typeConfig['subject_placeholder'] ?? ''),

            Textarea::make('body')
                ->label($typeConfig['body_label'] ?? __('cody::cody.fields.body.label'))
                ->required()
                ->rows(5)
                ->placeholder($typeConfig['body_placeholder'] ?? ''),
        ];

        // Type-specific metadata fields
        $metadataFields = $this->getMetadataFieldsForType($type);
        $fields = array_merge($fields, $metadataFields);

        // Priority with descriptions
        $fields[] = Radio::make('priority')
            ->label(__('cody::cody.fields.priority.label'))
            ->options($plugin->getPriorities())
            ->descriptions(__('cody::cody.fields.priority.descriptions'))
            ->default($type === 'bug' ? 'high' : 'medium')
            ->required();

        // Hint for current type
        if (isset($typeConfig['hint'])) {
            array_unshift($fields, Placeholder::make('type_hint')
                ->label('')
                ->content(new HtmlString('<div class="text-sm text-gray-500 dark:text-gray-400 italic">' . e($typeConfig['hint']) . '</div>')));
        }

        return $fields;
    }

    protected function getMetadataFieldsForType(?string $type): array
    {
        return match ($type) {
            'bug' => [
                Textarea::make('metadata.expected_behavior')
                    ->label(__('cody::cody.types.bug.expected_behavior'))
                    ->rows(3)
                    ->placeholder(__('cody::cody.types.bug.expected_behavior_placeholder')),
                Textarea::make('metadata.actual_behavior')
                    ->label(__('cody::cody.types.bug.actual_behavior'))
                    ->rows(3)
                    ->placeholder(__('cody::cody.types.bug.actual_behavior_placeholder')),
                Textarea::make('metadata.steps_to_reproduce')
                    ->label(__('cody::cody.types.bug.steps_to_reproduce'))
                    ->rows(3)
                    ->placeholder(__('cody::cody.types.bug.steps_to_reproduce_placeholder')),
                TextInput::make('metadata.environment')
                    ->label(__('cody::cody.types.bug.environment'))
                    ->placeholder(__('cody::cody.types.bug.environment_placeholder')),
            ],
            'task' => [
                Textarea::make('metadata.acceptance_criteria')
                    ->label(__('cody::cody.types.task.acceptance_criteria'))
                    ->rows(3)
                    ->placeholder(__('cody::cody.types.task.acceptance_criteria_placeholder')),
            ],
            'improvement' => [
                Textarea::make('metadata.current_situation')
                    ->label(__('cody::cody.types.improvement.current_situation'))
                    ->rows(3)
                    ->placeholder(__('cody::cody.types.improvement.current_situation_placeholder')),
                Textarea::make('metadata.desired_situation')
                    ->label(__('cody::cody.types.improvement.desired_situation'))
                    ->rows(3)
                    ->placeholder(__('cody::cody.types.improvement.desired_situation_placeholder')),
            ],
            default => [],
        };
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        $payload = [
            'name' => auth()->user()?->name,
            'email' => auth()->user()?->email,
            'subject' => $data['subject'],
            'body' => $data['body'],
            'type' => $data['type'],
            'priority' => $data['priority'],
            'project_key' => config('cody.project_key'),
            'metadata' => array_filter(array_merge(
                $data['metadata'] ?? [],
                [
                    'url' => url()->current(),
                    'user_agent' => request()->userAgent(),
                    'environment_app' => app()->environment(),
                ],
            )),
        ];

        try {
            $response = Http::withToken(config('cody.api_token'))
                ->post(config('cody.api_url') . '/issues', $payload);

            if ($response->successful()) {
                Notification::make()
                    ->title(__('cody::cody.notifications.success.title'))
                    ->body(__('cody::cody.notifications.success.body'))
                    ->success()
                    ->send();

                $this->form->fill([
                    'type' => null,
                    'priority' => 'medium',
                ]);
            } else {
                Notification::make()
                    ->title(__('cody::cody.notifications.error.title'))
                    ->body(__('cody::cody.notifications.error.body', ['status' => $response->status()]))
                    ->danger()
                    ->send();
            }
        } catch (\Exception $e) {
            Notification::make()
                ->title(__('cody::cody.notifications.connection_error.title'))
                ->body(__('cody::cody.notifications.connection_error.body'))
                ->danger()
                ->send();
        }
    }
}
