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
                    <a href="{{ route('about') }}" wire:navigate
                        class="{{ request()->routeIs('about') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
