@props([
    'images' => [
        'logo-cust-truhome-solutions-pos.png',
        'logo-cust-eagle-home-pos.png',
        'logo-cust-jg-wentworth-pos.png',
        'logo-cust-gold-star-financial-pos.png',
        'logo-cust-first-american-mortgage-solutions-pos.png',
    ],
])

@php
    $merge = ['class' => 'section-customers py-6 bg-coolgray-100'];

    if(!empty($background))
    {
        $merge['style'] = "background-image:url('".$background."')";
    }
@endphp

<section {{ $attributes->merge($merge) }}>
    <div class="container">
        <h6 class="text-center">{!! !$slot->isEmpty()?$slot:'Featured customers' !!}</h6>
        <div class="row justify-content-center">
            @foreach($images as $img)
            <div class="col-6 col-sm-4 col-xl-2">
                <img
                    class="img-fluid"
                    {!! imgsrc('https://static.icemortgagetechnology.com/icemt/assets/logo/gray/'.$img) !!}
                    alt=""
                    height="75"
                    width="155"
                    />
            </div>
            @endforeach
        </div>
    </div>
</section>
