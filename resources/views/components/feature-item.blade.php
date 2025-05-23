@props(['title', 'description', 'icon'])

<div class="col-12 wow zoomIn" data-wow-delay="0.2s">
    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
        style="width: 60px; height: 60px;">
        <i class="fa {{ $icon }} text-white"></i>
    </div>
    <h4>{{ $title }}</h4>
    <p class="mb-0">{{ $description }}</p>
</div>
