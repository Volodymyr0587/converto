@props([
    'icon' => 'length',
    'title' => 'Length Converter',
    'units' => [],
    'value' => null,
    'from' => null,
    'to' => null,
    'result' => null
])

<div class="max-w-6xl mx-auto p-6">
    <div class="bg-white rounded-2xl shadow-lg p-6 space-y-6 border border-gray-200">

        <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
            <x-dynamic-component :component="'svg.' . $icon" />
            {{ $title }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <!-- Value -->
            <div>
                <label class="text-sm font-medium text-gray-600 flex items-center gap-1">
                    <!-- Hashtag icon -->
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 3L7 21m8-18l-2 18M3 9h18M3 15h18" />
                    </svg>
                    Value
                </label>
                <input type="number" step="any" wire:model.live="value"
                       class="mt-1 w-full rounded-xl border-gray-300 p-2.5 focus:border-blue-500 focus:ring-blue-500">
            </div>

            <!-- From -->
            <div>
                <label class="text-sm font-medium text-gray-600 flex items-center gap-1">
                    <!-- Arrow icon -->
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                    From
                </label>
                <select wire:model.live="from"
                        class="mt-1 w-full rounded-xl border-gray-300 p-2.5 focus:border-blue-500 focus:ring-blue-500">
                    @foreach ($units as $unit => $factor)
                        <option value="{{ $unit }}">{{ ucfirst($unit) }}</option>
                    @endforeach
                </select>
            </div>

            <!-- To -->
            <div>
                <label class="text-sm font-medium text-gray-600 flex items-center gap-1">
                    <!-- Arrow icon flipped -->
                    <svg class="w-4 h-4 text-gray-500 rotate-180" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                    To
                </label>
                <select wire:model.live="to"
                        class="mt-1 w-full rounded-xl border-gray-300 p-2.5 focus:border-blue-500 focus:ring-blue-500">
                    @foreach ($units as $unit => $factor)
                        <option value="{{ $unit }}">{{ ucfirst($unit) }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Result Block -->
        <div class="mt-6">
            <div class="text-sm text-gray-500 mb-1 flex items-center gap-1">
                <!-- Sparkle Icon -->
                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 3v3m6.364-1.364l-2.121 2.121M21 12h-3m1.364 6.364l-2.121-2.121M12 21v-3m-6.364 1.364l2.121-2.121M3 12h3m-1.364-6.364l2.121 2.121" />
                </svg>
                Result
            </div>

            <!-- Animated result -->
            <div wire:key="result-{{ $result }}"
                 class="text-3xl font-bold p-4 rounded-xl border border-gray-300 bg-gray-100
                        transform transition-all duration-500 ease-out
                        animate-[fadeIn_0.4s_ease-out,slideUp_0.4s_ease-out]">

                {{ $result }}
            </div>
        </div>
    </div>

<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(8px); }
    to { transform: translateY(0); }
}
</style>
</div>
