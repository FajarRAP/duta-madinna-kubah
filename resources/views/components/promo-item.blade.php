@props(['information'])

<div class="promo-item">
    <div class="team-item bg-light rounded overflow-hidden">
        <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid promo-image" src="{{ asset("storage/{$information->image_path}") }}" alt="">
        </div>
        <div class="text-center py-4">
            <h4 class="text-primary">{{ $information->title }}</h4>
        </div>
    </div>
</div>
