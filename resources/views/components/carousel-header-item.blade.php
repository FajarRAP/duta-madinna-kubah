@props(['src', 'title'])

<div {{ $attributes->merge(['class' => 'carousel-item']) }}>
    <img class="w-100" src="{{ $src }}" alt="Image">
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 900px;">
            <h1 class="text-white mb-md-4 animated zoomIn">{{ $title }}</h1>
            <a href="#contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
        </div>
    </div>
</div>
