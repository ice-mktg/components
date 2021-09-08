@props([
    'href' => '#',
    'image' => 'https://images.contentstack.io/v3/assets/blt47a327ac368e22cd/bltd7d82604e76bab42/5ffb1fc21166ce7d2ed1cdea/blog-2.jpg',
    'target' => '_parent',
])

@if(!isset($attributes['unwrap']))
<a class="text-decoration-none d-block w-100 group" href="{{ $href }}" target="{{ $target }}">
@endif
    <div class="card shadow h-100">
        <div class="card-thumbnail ratio-16/9" style="background-image:url('{{ $image }}');"></div>

        <div class="position-relative d-none">
            <div class="shape shape-fluid-x shape-bottom svg-shim text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
            </div>
        </div>

        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
@if(!isset($attributes['unwrap']))
</a>
@endif