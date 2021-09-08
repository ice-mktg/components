@props(['wide', 'testimonial'])

@php
    if(empty($testimonial)) { return; }

    $testimonial = config('icemt-testimonials.'.$testimonial);
    $merge = ['class' => 'section-testimonial'];
    if(strpos($attributes['class'], 'bg-') === false)
    {
        $merge['class'].= ' bg-lawn-100 text-lawn';
    }

    $wide = $wide??false;
@endphp

<section {{ $attributes->merge($merge) }}>
    {{ $before??'' }}
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @if(!empty($testimonial['video']))
            <div class="col-lg-7 order-lg-2 mb-8 mb-lg-0">
                <img
                    class="vidyard-player-embed img-fluid"
                    src="https://play.vidyard.com/{{ $testimonial['video'] }}.jpg"
                    data-uuid="{{ $testimonial['video'] }}"
                    data-v="4"
                    data-type="lightbox" />
            </div>

            <div class="col-lg-5">
            @else
            <div class="col-{{ $wide?12:10 }} text-center">
            @endif

                <x-molecule.testimonial
                    :testimonial="$testimonial"
                    :logo="icemt($testimonial['logo']??'')"
                    >
                    {{ $testimonial['quote'] }}

                    <x-slot name="cite">
                        {{ $testimonial['cite'] }}
                    </x-slot>
                </x-molecule.testimonial>

            </div>
        </div>
    </div>
    {{ $after??'' }}
</section>
