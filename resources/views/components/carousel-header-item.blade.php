@props(['src', 'title'])

<div {{ $attributes->merge(['class' => 'carousel-item']) }}>
    <img class="w-100" src="{{ $src }}" alt="Image">
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 900px;">
            {{-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5> --}}
            <h1 class="display-4 text-white mb-md-4 animated zoomIn">{{ $title }}</h1>
            {{-- <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a> --}}
            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
        </div>
    </div>
</div>
