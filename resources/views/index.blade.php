<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ Vite::image('logo.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light">
                        <i class="fa fa-map-marker-alt me-2"></i>
                        Desa Sukorejo - Kec. Gandusari Kab. Trenggalek, Jawa Timur
                    </small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>0852 3673 8187</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>sales@kubahmadinna.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/dutamadinnakubah/"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/dutamadinnakubah/"><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-2 px-sm-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0 d-flex align-items-center gap-3">
                <img src="{{ Vite::image('logo.png') }}" class="logo d-none d-sm-block">
                <h1 class="m-0">Duta Madinna Kubah</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#header-carousel" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#services" class="nav-item nav-link">Services</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-primary py-2 px-4 ms-3">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                @endauth
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <x-carousel-header-item :src="Vite::image('carousel-header-item-1.jpg')" title="Kualitas Terbaik Dengan Harga Bersaing"
                    class="active" />
                <x-carousel-header-item :src="Vite::image('carousel-header-item-2.jpg')" title="Menghasilkan Karya Seni Yang Indah Dan Berkualitas" />
                <x-carousel-header-item :src="Vite::image('carousel-header-item-3.jpg')" title="Tersedia Banyak Pilihan Design Dan Warna" />
                <x-carousel-header-item :src="Vite::image('carousel-header-item-4.jpg')" title="Dukungan Team Yang Berkompeten Dan Profesional" />
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div id="about" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">Kontraktor Kubah Masjid Dengan Lebih Dari 20 Tahun Pengalaman</h1>
                    </div>
                    <p class="mb-4">Sebagai kontraktor kubah masjid berpengalaman kami melayani pekerjaan di seluruh
                        wilayah Indonesia dari Sabang sampai Meraoke. Dengan didukung workshop kami yang berada di
                        beberapa wilayah Indonesia antara lain kota Rantau provinsi Kalimantan Selatan, Samarinda
                        provinsi Kalimantan Timur, Trenggalek provinsi Jawa Timur dan Lombok Barat provinsi Nusa
                        Tenggara Barat.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pemenang Penghargaan</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Tim Professional</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Layanan 24/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Harga Bersaing</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Konsultasi Gratis</h5>
                            <h4 class="text-primary mb-0">0852 3673 8187</h4>
                        </div>
                    </div>
                    <a href="https://wa.me/6285236738187" target="_blank"
                        class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Hubungi Kami</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Kenapa Harus Memilih Kami</h5>
                <h1 class="mb-0">Kami Di sini Untuk Mewujudkan Kubah Masjid Impian Anda</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <x-feature-item icon="fa-cubes" title="Terbaik di Industri"
                            description="Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor" />
                        <x-feature-item icon="fa-award" title="Pemenang Penghargaan"
                            description="Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor" />
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <x-feature-item icon="fa-users-cog" title="Tim Professional"
                            description="Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor" />
                        <x-feature-item icon="fa-phone-alt" title="Layanan 24/7"
                            description="Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div id="services" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">Solusi Berbagai Kubah Masjid Bagi Anda</h1>
            </div>
            <div class="row g-5">
                <x-service-item title="Kubah Masjid Enamel"
                    description="Enamel adalah material pelapis pada metal yang sudah lama dikenal terutama pada alat-alat rumah tangga"
                    wow-delay="0.3s" />
                <x-service-item title="Kubah Masjid Alumunium"
                    description="Kubah Masjid Aluminium adalah kubah masjid dengan system panel yang berbahan dasar plat aluminium dengan ketebalan bervariasi dan dapat diwarnai dengan bermacam-macam warna"
                    wow-delay="0.6s" />
                <x-service-item title="Kubah Masjid Galvalum"
                    description="Galvalum atau Zincalum adalah merupakan material baja dengan pelapisan yang mengandung unsur alumunium dan zinc, dengan komposisi aluminium 55%, unsur zinc 43.5% dan unsur silikon 1.5%."
                    wow-delay="0.9s" />
                <x-service-item title="Ornamen Kubah"
                    description="Perindah sisi dalam kubah masjid demgam pembuatan ornamen kubah kaligrafi secara permanen."
                    wow-delay="0.3s" />
                <x-service-item title="Dekorasi Plafon Kubah Masjid"
                    description="Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed"
                    wow-delay="0.6s" />
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Segera Hubungi Kami</h3>
                        <p class="text-white mb-3">Dapatkan konsultasi sepuasnya gratis</p>
                        <h2 class="text-white mb-0">0852 3673 8187</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
    <div id="contact" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Informasi Harga</h5>
                        <h1 class="mb-0">Silakan Hubungi Kami Untuk Menanyakan Harga Persisnya</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4">
                                <i class="fa fa-reply text-primary me-3"></i>
                                Pasti dibalas dalam 1x24 jam
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                Layanan 24/7
                            </h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea
                        et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero
                        ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore
                        sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Hubungi Nomor Di Bawah Ini</h5>
                            <h4 class="text-primary mb-0">0852 3673 8187</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                        data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Nama"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Pilih Layanan</option>
                                        <option value="1">Kubah Masjid Enamel</option>
                                        <option value="2">Kubah Masjid Aluminium</option>
                                        <option value="3">Kubah Masjid Galvalum</option>
                                        <option value="4">Ornamen Kubah</option>
                                        <option value="5">Dekorasi Plafon Kubah Masjid</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Pesan"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                @for ($i = 0; $i < 3; $i++)
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="img/testimonial-1.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="img/testimonial-2.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="img/testimonial-3.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="img/testimonial-4.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">

        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Promo Hari Ini</h5>
                <h1 class="mb-0">Jangan Ketinggalan Dengan Promo Terbaru Dari Kami</h1>
            </div>
            <div class="owl-carousel promo-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach ($informations as $information)
                    <x-promo-item :$information />
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5 justify-content-between">
                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="text-light mb-0">Hubungi Kami</h3>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0"> Desa Sukorejo - Kec. Gandusari Kab. Trenggalek, Jawa Timur</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-envelope-open text-primary me-2"></i>
                        <p class="mb-0">sales@kubahmadinna.com</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone text-primary me-2"></i>
                        <p class="mb-0">0852 3673 8187</p>
                    </div>
                    <div class="d-flex mt-4">
                        <a class="btn btn-primary btn-square me-2"
                            href="https://www.facebook.com/dutamadinnakubah/"><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-primary btn-square" href="https://www.instagram.com/dutamadinnakubah/"><i
                                class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.636315152208!2d111.69685739113497!3d-8.138456270984573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7919887ace7a19%3A0xef6251c0f36397aa!2sPT.%20Duta%20Madinna%20Kubah%20Trenggalek!5e0!3m2!1sen!2sid!4v1748014481349!5m2!1sen!2sid"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy;
                            <a class="text-white border-bottom" href="#">Duta Madinna Kubah</a>. Hak Cipta
                            Dilindungi.
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML
                                Codex</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
