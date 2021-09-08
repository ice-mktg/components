@props([
    'icon',
    'label' => '',
    'svg',
    'unwrap',
    'negative' => '',
])

@php
    $isUnwrap = $unwrap??false;

    $merge['class'] = 'icon-item d-flex text-jetblack';
    $merge['class'].= $isUnwrap ? ' align-items-centerq' : ' p-2 hover:bg-iceblue-100 hover:path-jetblack';
@endphp

<{{ !($unwrap??false)?'a':'span' }} {{ $attributes->merge($merge) }}>
@if(($svg??false) || ($icon??false))
    <div class="me-4">
        @if($svg??false)
        @includeIf('partials/svg/'.($svg??'encompass'))
        @endif

        @if($icon??false)
        <img src="{{ $icon }}" alt="" />
        @endif
    </div>
@endif

    <div>
        <div class="fw-light {{ $negative?'text-white':'' }}">{{ $isUnwrap ? $slot : $label }}</div>

        @if(!$isUnwrap)
        <div class="fs-xs light">{{ $slot }}</div>
        @endif
    </div>
</{{ !($unwrap??false)?'a':'span' }}>