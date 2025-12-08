<footer class="w-full bg-white p-8">
    <div
        class="flex flex-row flex-wrap items-center justify-center gap-y-6 gap-x-12 bg-white text-center md:justify-between">
        <x-svg.app-logo />

        <ul class="flex flex-wrap items-center gap-y-2 gap-x-8">
            <li>
                <a href="{{ route('about') }}" wire:navigate
                    class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                    About Us
                </a>
            </li>
            <li>
                <a href="https://mit-license.org/" target="_blank"
                    class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                    License
                </a>
            </li>
            <li>
                <a href="https://github.com/Volodymyr0587/converto" target="_blank"
                    class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                    Contribute
                </a>
            </li>
            <li>
                <a href="https://github.com/Volodymyr0587" target="_blank"
                    class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
                    Contact Us
                </a>
            </li>
        </ul>
    </div>
    <p class="block mb-4 text-sm text-center text-slate-500 md:mb-0 border-t border-slate-200 mt-4 pt-4">
        Copyright © {{ date('Y') }}&nbsp;
        <a href="{{ route('home') }}">{{ config('app.name') }}</a>.
    </p>
</footer>
