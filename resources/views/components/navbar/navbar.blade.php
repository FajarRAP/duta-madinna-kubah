<nav class="bg-white border-gray-200 fixed top-0 left-0 right-0 z-50" x-data="{ open: false }"
    x-on:click.away="open = false">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3">
            <img src="{{ Vite::image('logo.png') }}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Duta Madinna Kubah</span>
        </a>
        <button
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            x-on:click="open = !open">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <div class="w-full" x-show="open" x-collapse>
            <ul class="font-medium flex flex-col p-2.5 mt-4 border border-gray-100 rounded-lg bg-gray-50 shadow">
                {{ $navlinks }}
            </ul>
        </div>
        <div class="hidden md:block w-auto">
            <ul class="font-medium flex gap-8">
                {{ $navlinks }}
            </ul>
        </div>
    </div>
</nav>
