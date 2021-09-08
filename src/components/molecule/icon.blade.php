@props([
    'icon',
    'alt',
    'unwrap',
    'colspan' => 2
])

@php
    switch($colspan)
    {
        case 6: $cls = 'col-md-6 col-lg-4 col-xl'; break;
        case 5: $cls = 'col-md-6 col-lg-4 col-xl'; break;
        case 4: $cls = 'col-md-6 col-lg-4 col-xl-3'; break;
        case 3: $cls = 'col-md-6 col-lg-4'; break;
        default: $cls = 'col-md-6';
    }
@endphp

@if(!isset($unwrap))
<div class="{{ $cls }} my-4">
@endif

    <div class="molecule-icon">
        @if(isset($icon))
        <img class="svg-lg mb-6" src="{{ $icon }}" alt="{{ $alt??'' }}" />
        @endif
        {{ $slot }}
    </div>

@if(!isset($unwrap))
</div>
@endif