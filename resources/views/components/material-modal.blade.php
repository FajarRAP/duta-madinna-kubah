@props(['title', 'image', 'description', 'benefits'])

<div {{ $attributes->merge(['class' => 'modal fade']) }}>
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light">{{ $title }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body d-flex flex-column">
                <img src="{{ Vite::image($image) }}" class="img-fluid rounded mb-3 align-self-center"
                    alt="Material Image">
                <p>
                    {{ $description }}
                </p>
                <ul>
                    @foreach ($benefits as $benefit)
                        <li>{{ $benefit }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
