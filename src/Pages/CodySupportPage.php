<?php

namespace CodySupport\FilamentCody\Pages;

use CodySupport\FilamentCody\CodyPlugin;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Http;

class CodySupportPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament-cody::pages.cody-support';

    protected static ?string $slug = 'cody-support';

    protected static ?int $navigationSort = 100;

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
            'type' => 'support',
            'priority' => 'medium',
        ]);
    }

    public function form(Form $form): Form
    {
        $plugin = CodyPlugin::get();

        return $form
            ->schema([
                TextInput::make('subject')
                    ->label(__('cody::cody.fields.subject.label'))
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('cody::cody.fields.subject.placeholder')),

                Textarea::make('body')
                    ->label(__('cody::cody.fields.body.label'))
                    ->required()
                    ->rows(5)
                    ->placeholder(__('cody::cody.fields.body.placeholder')),

                Select::make('type')
                    ->label(__('cody::cody.fields.type.label'))
                    ->options($plugin->getTypes())
                    ->required(),

                Select::make('priority')
                    ->label(__('cody::cody.fields.priority.label'))
                    ->options($plugin->getPriorities())
                    ->required(),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        try {
            $response = Http::withToken(config('cody.api_token'))
                ->post(config('cody.api_url') . '/issues', [
                    'name' => auth()->user()?->name,
                    'email' => auth()->user()?->email,
                    'subject' => $data['subject'],
                    'body' => $data['body'],
                    'type' => $data['type'],
                    'priority' => $data['priority'],
                    'project_key' => config('cody.project_key'),
                    'metadata' => [
                        'url' => url()->current(),
                        'user_agent' => request()->userAgent(),
                        'environment' => app()->environment(),
                    ],
                ]);

            if ($response->successful()) {
                Notification::make()
                    ->title(__('cody::cody.notifications.success.title'))
                    ->body(__('cody::cody.notifications.success.body'))
                    ->success()
                    ->send();

                $this->form->fill([
                    'type' => 'support',
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
