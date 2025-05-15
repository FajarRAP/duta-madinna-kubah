<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <x-navbar class="border-b">
            <x-slot name="navlinks">
                <li>
                    <x-navbar.nav-link :href="route('home')" :active="request()->routeIs('home')">
                        Beranda
                    </x-navbar.nav-link>
                </li>
                <li>
                    <x-navbar.nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-navbar.nav-link>
                </li>
                <li>
                    <x-navbar.nav-link :href="route('information')" :active="request()->routeIs('information')">
                        Informasi
                    </x-navbar.nav-link>
                </li>
                <li>
                    <x-navbar.nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')">
                        Portofolio
                    </x-navbar.nav-link>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-navbar.nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <x-primary-button class="w-full flex justify-center">
                                Log Out
                            </x-primary-button>
                        </x-navbar.nav-link>
                    </form>
                </li>
            </x-slot>
        </x-navbar>

        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main>
            {{ $slot }}
        </main>
    </div>
</x-app-layout>
