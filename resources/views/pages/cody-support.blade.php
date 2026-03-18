<x-filament-panels::page>
    <form wire:submit="submit">
        {{ $this->form }}

        @if($this->data['type'] ?? null)
            <div style="margin-top: 1.5rem;">
                <x-filament::button type="submit" size="lg">
                    {{ __('cody::cody.modal.submit') }}
                </x-filament::button>
            </div>
        @endif
    </form>

    {{-- Cody.support info block --}}
    <div style="margin-top: 2rem; background-color: #eff6ff; border-radius: 0.75rem; padding: 2rem; text-align: center;">
        <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">🤖</div>
        <h3 style="font-size: 1.125rem; font-weight: 600; color: #1e3a5f;">
            Cody.support
        </h3>
        <p style="font-size: 0.875rem; color: #64748b; margin-top: 0.5rem;">
            {{ __('cody::cody.info.description', ['company' => config('cody.company_name')]) }}
        </p>

        <div style="margin-top: 1rem; display: flex; flex-direction: column; gap: 0.5rem; align-items: center;">
            <span style="font-size: 0.875rem; color: #475569;">📋 {{ __('cody::cody.info.feature_track') }}</span>
            <span style="font-size: 0.875rem; color: #475569;">💬 {{ __('cody::cody.info.feature_communicate') }}</span>
            <span style="font-size: 0.875rem; color: #475569;">📊 {{ __('cody::cody.info.feature_status') }}</span>
        </div>

        <a href="https://cody.support"
           target="_blank"
           rel="noopener noreferrer"
           style="margin-top: 1.25rem; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; border-radius: 0.5rem; background-color: #2563eb; padding: 0.625rem 1.5rem; font-size: 0.875rem; font-weight: 600; color: white; text-decoration: none; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
            🤖 {{ __('cody::cody.info.login_button') }}
        </a>
    </div>
</x-filament-panels::page>
