<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Converto - Universal Converter' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body class="min-h-full bg-gray-100 text-gray-900">
        <div class="min-h-screen flex flex-col">
            <!-- Simple Navigation -->
            <x-layouts.navigation />

            <main class="py-10 grow">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>

            <x-layouts.footer />
        </div>

        @livewireScripts
    </body>

</html>
