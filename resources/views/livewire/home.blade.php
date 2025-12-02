<div>
    <h1 class="text-3xl font-bold mb-6 text-gray-900">Available instruments</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Картка інструменту 1 -->
        <a href="{{ route('converters.length') }}"
            class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-100 group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600">Length converter</h2>
                <span class="text-2xl">📏</span>
            </div>
            <p class="text-gray-600">Convert meters, feet, inches and other units.</p>
        </a>

        <!-- Плейсхолдер для майбутнього інструменту -->
        <div class="p-6 bg-gray-100 rounded-lg border border-dashed border-gray-300 flex items-center justify-center">
            <span class="text-gray-400">Coming soon: Weight converter</span>
        </div>
    </div>
</div>
