@props([
    'fpo',
    'image' => '',
    'columns' => '6/5',
    'reverse' => false,
    'alt'
])

@php
    // image check
    if(empty($image))
    {
        echo '<div class="alert alert-warning m-0 text-center"><span class="text-redline">section.river</span> - This module requires an image attribute!</div>';
        return;
    }

    // column check
    $columns = explode('/', $columns);
    if(count($columns)<2)
    {
        echo '<div class="alert alert-warning m-0 text-center"><span class="text-redline">section.river</span> - Invalid columns value!</div>';
        return;
    }

    [$imgcol, $copycol] = $columns;

    // attribute merge
    $merge = ['class' => 'section-river py-8'];
    if(!empty($background))
    {
        $merge['style'] = "background-image:url('".$background."')";
    }
@endphp

<section {{ $attributes->merge($merge) }}>
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-image col-xl-{{ $imgcol }} col-lg-6 mb-6 mb-lg-0 {{ $reverse?' order-lg-2':'' }}">
                <img class="img-fluid d-block mx-auto{{ ($fpo??false)?' border border-redline':'' }}" src="{{ $image }}" alt="{{ $alt??'' }}" />
            </div>
            <div class="col-copy col-xl-{{ $copycol }} col-lg-6 {{ $reverse&&($imgcol+$copycol!=12)?' offset-xl-1':'' }}">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
