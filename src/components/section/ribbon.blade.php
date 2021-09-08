@props([
    'cta' => 'Request a demo',
    'href' => route('request-demo'),
])

@php
    $merge = ['class' => 'section-ribbon bg-iceblue text-white text-center py-8'];

    if(!empty($background))
    {
        $merge['style'] = "background-image:url('".$background."')";
    }
@endphp

<section {{ $attributes->merge($merge) }}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="d-md-flex align-items-center mb-0">
                    <div class="h1 mb-6 mb-md-0">{!! !$slot->isEmpty()?$slot:'<span class="text-sm-nowrap">Ready to get started?</span> <span class="text-sm-nowrap">Get in touch.</span>' !!}</div>
                    <x-cta class="btn-lg mx-6" :href="$href">{{ $cta }}</x-cta>
                </div>
            </div>
        </div>
    </div>
</section>
