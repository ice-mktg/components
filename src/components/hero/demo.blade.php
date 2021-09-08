@props([
    'image' => icemt('policy-and-education-manager.jpg'),
])

@php
    $merge['class'] = 'section-hero-demo d-flex align-items-center py-8';

    if(strpos($attributes['class'], 'bg-') === false)
    {
        $merge['class'].= ' bg-iceblue-300';
    }

    $merge['style'] = "background-image:url('".$image."');";
@endphp

<section {!! $attributes->merge($merge) !!}>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                {{ $slot }}
            </div>

            {{-- this space is reserved for the background image --}}
        </div>
    </div>
</section>