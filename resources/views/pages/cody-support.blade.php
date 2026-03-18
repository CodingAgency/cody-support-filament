<x-filament-panels::page>
    <div style="display: flex; flex-direction: column-reverse; gap: 1.5rem;">
        {{-- Form --}}
        <div style="flex: 1; min-width: 0;">
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
        </div>

        {{-- Cody.support info block --}}
        <div>
            <x-filament::section>
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">🤖</div>
                    <h3 style="font-size: 1.125rem; font-weight: 600;">
                        Cody.support
                    </h3>
                    <p style="font-size: 0.875rem; opacity: 0.7; margin-top: 0.5rem;">
                        {{ __('cody::cody.info.description', ['company' => config('cody.company_name')]) }}
                    </p>

                    <div style="margin-top: 1rem; text-align: left; display: flex; flex-direction: column; gap: 0.75rem;">
                        <div style="display: flex; align-items: flex-start; gap: 0.5rem; font-size: 0.875rem;">
                            <span>📋</span>
                            <span>{{ __('cody::cody.info.feature_track') }}</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 0.5rem; font-size: 0.875rem;">
                            <span>💬</span>
                            <span>{{ __('cody::cody.info.feature_communicate') }}</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 0.5rem; font-size: 0.875rem;">
                            <span>📊</span>
                            <span>{{ __('cody::cody.info.feature_status') }}</span>
                        </div>
                    </div>

                    <a href="https://cody.support"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="margin-top: 1.5rem; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; border-radius: 0.5rem; background-color: #2563eb; padding: 0.625rem 1rem; font-size: 0.875rem; font-weight: 600; color: white; text-decoration: none; width: 100%; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: background-color 0.15s;">
                        🤖 {{ __('cody::cody.info.login_button') }}
                    </a>
                </div>
            </x-filament::section>
        </div>
    </div>

    @push('styles')
    <style>
        @media (min-width: 1024px) {
            .fi-page-content > div > div:first-child {
                flex-direction: row !important;
            }
            .fi-page-content > div > div:first-child > div:last-child {
                width: 20rem;
                flex-shrink: 0;
            }
        }
    </style>
    @endpush
</x-filament-panels::page>
