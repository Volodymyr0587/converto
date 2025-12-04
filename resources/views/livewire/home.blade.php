<div>
    <h1 class="text-3xl font-bold mb-6 text-gray-900">Available instruments</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Length converter card -->
        <a href="{{ route('converters.length') }}" wire:navigate
            class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-100 group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600">Length converter</h2>
                <x-svg.length />
            </div>
            <p class="text-gray-600">Convert meters, feet, inches and other units.</p>
        </a>

        <!-- Weight converter card -->
        <a href="{{ route('converters.weight') }}" wire:navigate
            class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-100 group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600">Weight converter</h2>
                <x-svg.weight />
            </div>
            <p class="text-gray-600">Convert kilograms, pounds, ounces and other units.</p>
        </a>

        <!-- Time converter card -->
        <a href="{{ route('converters.time') }}" wire:navigate
            class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-100 group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600">Time converter</h2>
                <x-svg.time />
            </div>
            <p class="text-gray-600">Convert seconds, minutes, hours and other units.</p>
        </a>

        <!-- Temperature converter card -->
        <a href="{{ route('converters.temperature') }}" wire:navigate
            class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-100 group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600">Temperature converter</h2>
                <x-svg.temperature />
            </div>
            <p class="text-gray-600">Convert celsius, fahrenheit and kelvin units.</p>
        </a>

        <!-- Placeholder for feature instrument -->
        <div class="p-6 bg-gray-100 rounded-lg border border-dashed border-gray-300 flex items-center justify-center">
            <span class="text-gray-400">Coming soon: Data Storage Converter</span>
        </div>
    </div>
</div>
