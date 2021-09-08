@props([
    'image' => 'https://images.contentstack.io/v3/assets/blt47a327ac368e22cd/bltd7d82604e76bab42/5ffb1fc21166ce7d2ed1cdea/blog-2.jpg',
    'href' => '#',
    'background',
    'icon',
])

@php
    $merge = ['class' => 'card shadow h-100'];

    if($background??false)
    {
        $merge['style'] = "background-image:url('".$background."')";
    }
@endphp

<div {{ $attributes->merge($merge) }}>
    <div class="card-body">
        @if($icon??false)
        <img class="svg-lg mb-4" src="{{ $icon??'' }}" alt="" />
        @endif

        {{ $slot }}
    </div>
</div>
