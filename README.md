# Filament Cody

A [Filament](https://filamentphp.com) plugin that adds a 🛟 support button to your panel. Users can report issues directly to [Cody.support](https://cody.support) without leaving the admin panel.

Supports **Filament v4** (Livewire 3) and **Filament v5** (Livewire 4).

## Installation

```bash
composer require codingagency/cody-support-filament
```

## Configuration

Add these variables to your `.env` file:

```env
CODY_API_TOKEN=cody_your_api_token
CODY_PROJECT_KEY=SHOP
```

Optionally publish the config file:

```bash
php artisan vendor:publish --tag=cody-config
```

## Usage

Register the plugin in your `PanelProvider`:

```php
use CodySupport\FilamentCody\CodyPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugins([
            CodyPlugin::make(),
        ]);
}
```

That's it! A 🛟 button will appear in the top bar of your Filament panel. Clicking it opens a modal where users can submit issues with:

- **Subject** — Brief description
- **Description** — Detailed explanation
- **Type** — Bug, Task, Support, Improvement, or Idea
- **Priority** — Low, Medium, High, or Urgent

The authenticated user's name and email are automatically included, along with metadata (page URL, user agent, environment).

## Customization

You can customize the available types and priorities:

```php
CodyPlugin::make()
    ->types([
        'bug' => 'Bug',
        'feature' => 'Feature Request',
        'question' => 'Question',
    ])
    ->priorities([
        'low' => 'Low',
        'high' => 'High',
    ]),
```

## License

MIT
