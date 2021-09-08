@props([
    'slides' => [],
])

@php
    if(empty($slides))
    {
        echo '<div class="alert alert-warning m-0 text-center"><span class="text-redline">carousel</span> - This module requires a slides attribute!</div>';
        return;
    }

    $hasCaption = count(array_column($slides, 'caption'))!=0;
@endphp

<div class="component-carousel carousel">
    @foreach($slides as $slide)
    <div class="carousel-cell">
        <img class="img-fluid" src="{{ $slide['img'] }}" alt="">
        @if($hasCaption)
        <div class="caption">
            @if(isset($slide['heading']))
            <p class="lead">{{ $slide['heading'] }}</p>
            @endif
            {!! wpautop($slide['caption']??'') !!}
        </div>
        @endif
    </div>
    @endforeach
</div>

@if($hasCaption)
<div class="carousel-caption">
    @if(isset($slides[0]['heading']))
    <p class="lead">{{ $slides[0]['heading'] }}</p>
    @endif
    {!! wpautop($slides[0]['caption']??'') !!}
</div>
@endif

<div class="dotty mt-6">
    @for($i=0;$i<count($slides);$i++)
    <div class="dot"></div>
    @endfor
</div>
