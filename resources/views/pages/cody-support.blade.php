<x-filament-panels::page>
    <div class="flex flex-col-reverse lg:flex-row gap-6">
        {{-- Form --}}
        <div class="flex-1 min-w-0">
            <form wire:submit="submit">
                {{ $this->form }}

                @if($this->data['type'] ?? null)
                    <div class="mt-6">
                        <x-filament::button type="submit" size="lg">
                            {{ __('cody::cody.modal.submit') }}
                        </x-filament::button>
                    </div>
                @endif
            </form>
        </div>

        {{-- Cody.support info block --}}
        <div class="lg:w-80 shrink-0">
            <div class="rounded-xl border border-gray-200 dark:border-white/10 bg-white dark:bg-white/5 p-6 sticky top-6">
                <div class="text-center">
                    <div class="text-4xl mb-3">🤖</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Cody.support
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                        {{ __('cody::cody.info.description', ['company' => config('cody.company_name')]) }}
                    </p>

                    <div class="mt-4 space-y-3 text-left">
                        <div class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
                            <span class="shrink-0">📋</span>
                            <span>{{ __('cody::cody.info.feature_track') }}</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
                            <span class="shrink-0">💬</span>
                            <span>{{ __('cody::cody.info.feature_communicate') }}</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
                            <span class="shrink-0">📊</span>
                            <span>{{ __('cody::cody.info.feature_status') }}</span>
                        </div>
                    </div>

                    <a href="https://cody.support"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="mt-6 inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 transition-colors w-full">
                        🤖 {{ __('cody::cody.info.login_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
