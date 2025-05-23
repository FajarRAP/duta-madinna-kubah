@props(['title', 'description', 'wow-delay'])

<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ $wowDelay }}">
    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
        <div class="service-icon">
            <i class="fa fa-check text-white"></i>
        </div>
        <h4 class="mb-3">{{ $title }}</h4>
        <p class="m-0">{{ $description }}</p>
        <a class="btn btn-lg btn-primary rounded" href="">
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
