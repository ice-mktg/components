{{-- align: start|center|end --}}
@props(['align'=>'center', 'wide'])

@php
    $merge['class'] = 'section-hero-default py-6 py-md-8 py-lg-11 text-'.$align;

    if(strpos($attributes['class'], 'bg-') === false)
    {
        $merge['class'].= ' bg-iceblue';
    }
@endphp

<section {{ $attributes->merge($merge) }}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-{{ ($wide??false)?12:8 }}">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>