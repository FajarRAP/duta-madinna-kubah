@props(['description', 'image', 'wow-delay'])

<div class="col-md-4 wow zoomIn" data-wow-delay="{{ $wowDelay }}">
    <div class="card h-100 shadow-sm border-0">
        <img src="{{ Vite::image($image) }}" class="card-img-top" alt="dome design image">
        <div class="card-body">
            <p class="card-text text-muted">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
