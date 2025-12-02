<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Universal Converter' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-full bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col">

        <!-- Simple Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <h1 class="text-lg font-bold">
                    <a href="/" class="hover:text-blue-600">Universal Converter</a>
                </h1>
            </div>
        </header>

        <main class="flex-1 py-8">
            <div class="max-w-7xl mx-auto px-4">
                {{ $slot }}
            </div>
        </main>

        <footer class="py-6 text-center text-sm text-gray-500">
            Universal Unit Converter • Laravel 12 • Livewire 3
        </footer>
    </div>

    @livewireScripts
</body>
</html>
