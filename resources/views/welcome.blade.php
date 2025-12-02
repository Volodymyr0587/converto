<x-layout title="Universal Converter">

    <h2 class="text-2xl font-bold text-center mb-8">Choose a Converter</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Length -->
        <a href="/converter/length"
           class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition block text-center">
            <h3 class="text-lg font-semibold">Length Converter</h3>
            <p class="text-gray-600 text-sm mt-1">Meters, kilometers, inches, miles...</p>
        </a>

        <!-- Mass -->
        <a href="/converter/mass"
           class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition block text-center">
            <h3 class="text-lg font-semibold">Mass Converter</h3>
            <p class="text-gray-600 text-sm mt-1">Grams, kilograms, pounds...</p>
        </a>

        <!-- Temperature -->
        <a href="/converter/temperature"
           class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition block text-center">
            <h3 class="text-lg font-semibold">Temperature Converter</h3>
            <p class="text-gray-600 text-sm mt-1">Celsius, Fahrenheit, Kelvin...</p>
        </a>
    </div>

</x-layout>
