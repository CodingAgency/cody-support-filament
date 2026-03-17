<?php

namespace CodySupport\FilamentCody;

use CodySupport\FilamentCody\Pages\CodySupportPage;
use Filament\Contracts\Plugin;
use Filament\Panel;

class CodyPlugin implements Plugin
{
    protected ?array $types = null;

    protected ?array $priorities = null;

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }

    public function getId(): string
    {
        return 'cody';
    }

    public function types(array $types): static
    {
        $this->types = $types;

        return $this;
    }

    public function getTypes(): array
    {
        return $this->types ?? __('cody::cody.fields.type.options');
    }

    public function priorities(array $priorities): static
    {
        $this->priorities = $priorities;

        return $this;
    }

    public function getPriorities(): array
    {
        return $this->priorities ?? __('cody::cody.fields.priority.options');
    }

    public function register(Panel $panel): void
    {
        $panel->pages([
            CodySupportPage::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
