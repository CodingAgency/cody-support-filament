<x-filament-panels::page>
    <div class="max-w-2xl">
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
            {{ __('cody::cody.page.description') }}
        </p>

        <form wire:submit="submit">
            {{ $this->form }}

            <div class="mt-6">
                <x-filament::button type="submit">
                    {{ __('cody::cody.modal.submit') }}
                </x-filament::button>
            </div>
        </form>
    </div>
</x-filament-panels::page>
