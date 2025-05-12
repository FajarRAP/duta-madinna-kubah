<x-app-layout>

    <!-- Navbar -->
    <x-navbar>
        <x-slot name="navlinks">
            <x-navbar.nav-link href="#home" title="Beranda" class="text-blue-600" />
            <x-navbar.nav-link href="#information" title="Informasi" />
            <x-navbar.nav-link href="#about" title="Tentang" />
            <x-navbar.nav-link href="#services" title="Layanan" />
            <x-navbar.nav-link href="#contact" title="Kontak" />
            <li>
                <a href="{{ route('login.get') }}">
                    <x-primary-button>Login</x-primary-button>
                </a>
            </li>
        </x-slot>
    </x-navbar>

    <!-- Hero -->
    <section id="home" class="text-white relative h-screen w-full">
        <img src="{{ Vite::image('hero.jpg') }}" alt="Hero Image"
            class="absolute h-screen object-cover w-full brightness-50">
        <div class="container mx-auto text-center px-6 absolute left-0 right-0 top-1/2 -translate-y-1/2">
            <h2 class="text-4xl font-bold mb-4">Kontraktor Kubah Masjid Professional</h2>
            <p class="text-xl mb-6">
                Melayani pekerjaan di seluruh wilayah Indonesia dari Sabang sampai Meraoke. Dengan
                didukung workshop kami yang berada di beberapa wilayah Indonesia
            </p>
            <a href="#contact"
                class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                Hubungi Kami
            </a>
        </div>
    </section>

    {{-- Latest Information --}}
    <section id="information" class="py-20">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10">Informasi Terbaru</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Judul Informasi 1</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolores
                        cum
                        placeat, ipsa neque consectetur architecto temporibus voluptatum sed fuga in voluptates
                        dolore
                        distinctio atque blanditiis culpa itaque quibusdam debitis.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Judul Informasi 2</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                        ratione
                        numquam doloremque aperiam assumenda eaque rem ut ad et quaerat pariatur, molestias deserunt
                        qui
                        tempore dolore fugiat cupiditate sint natus?</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Judul Informasi 3</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic corporis
                        quam
                        ipsa at? Ullam nemo necessitatibus excepturi. Iusto fugiat dolores ducimus sapiente id
                        perspiciatis reprehenderit voluptate cumque eveniet. Aliquid, iste.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- About -->
    <section id="about" class="py-20 bg-blue-100 transition">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10">Tentang Kami</h3>
            <p class="max-w-3xl mx-auto text-center text-gray-600">
                Kami adalah kontraktor kubah masjid dengan sistem panel yaitu atap penutup kubah dengan menggunakan
                material logam yang terdiri dari panel-panel segi empat didominasi bentuk belah ketupat. Material
                yang
                kami gunakan adalah galvalium, aluminium, plat baja rendah karbon, dan stainless gold.
            </p>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10">Layanan Kami</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Pembuatan Kubah Masjid</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolores
                        cum
                        placeat, ipsa neque consectetur architecto temporibus voluptatum sed fuga in voluptates
                        dolore
                        distinctio atque blanditiis culpa itaque quibusdam debitis.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Pembuatan Plafon Masjid</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                        ratione
                        numquam doloremque aperiam assumenda eaque rem ut ad et quaerat pariatur, molestias deserunt
                        qui
                        tempore dolore fugiat cupiditate sint natus?</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Konsultasi Gratis</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic corporis
                        quam
                        ipsa at? Ullam nemo necessitatibus excepturi. Iusto fugiat dolores ducimus sapiente id
                        perspiciatis reprehenderit voluptate cumque eveniet. Aliquid, iste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-blue-100 transition">
        <div class="container mx-auto px-6 max-w-xl">
            <h3 class="text-3xl font-bold text-center mb-10">Hubungi Kami</h3>
            <a href="https://wa.me/6285316979307"
                class="w-full bg-blue-600 text-white p-3 rounded font-semibold hover:bg-blue-700 block text-center">
                Kirim Pesan
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-6 border-t mt-10">
        <p>&copy; 2025 Duta Madinna Kubah. Hak cipta dilindungi undang-undang.</p>
    </footer>
</x-app-layout>
