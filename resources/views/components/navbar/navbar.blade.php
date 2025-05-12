@props(['isFixed' => false])

<nav {{ $attributes->class(['bg-white border-gray-200 shadow-md', 'fixed top-0 left-0 right-0 z-50' => $isFixed]) }}
    x-data="{ open: false }" x-on:click.away="open = false">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3">
            <img src="{{ Vite::image('logo.png') }}" class="h-8" alt="Duta Madinna Kubah Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Duta Madinna Kubah</span>
        </a>
        <button
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            x-on:click="open = !open">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="w-full" x-show="open" x-collapse>
            <ul class="font-medium flex flex-col p-2.5 mt-4 border border-gray-100 rounded-lg bg-gray-50 shadow">
                {{ $navlinks }}
            </ul>
        </div>
        <div class="hidden md:block w-auto">
            <ul class="font-medium flex gap-8 items-center">
                {{ $navlinks }}
            </ul>
        </div>
    </div>
</nav>
