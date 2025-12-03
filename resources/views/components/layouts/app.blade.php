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
            <nav class="bg-white shadow-sm border-b border-gray-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo / App name -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('home') }}" wire:navigate
                                    class="ml-2 font-bold text-xl text-indigo-600 hover:text-indigo-800 transition">
                                    <div class="flex items-center gap-x-2">
                                        <x-svg.app-logo />
                                        <span>Converto</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Menu (add items here) -->
                            <div class="hidden sm:-my-px sm:ml-10 sm:flex sm:space-x-8">
                                <a href="{{ route('home') }}" wire:navigate
                                    class="{{ request()->routeIs('home') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                    Home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="py-10 grow">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>

            <footer class="w-full bg-white p-8">
                <div
                    class="flex flex-row flex-wrap items-center justify-center gap-y-6 gap-x-12 bg-white text-center md:justify-between">
                    <x-svg.app-logo />

                    <ul class="flex flex-wrap items-center gap-y-2 gap-x-8">
                        <li>
                            <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                                License
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                                Contribute
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="block mb-4 text-sm text-center text-slate-500 md:mb-0 border-t border-slate-200 mt-4 pt-4">
                    Copyright © {{ date('Y') }}&nbsp;
                    <a href="https://material-tailwind.com/" target="_blank" rel="noreferrer">{{ config('app.name')
                        }}</a>.
                </p>
            </footer>
        </div>

        @livewireScripts
    </body>

</html>
