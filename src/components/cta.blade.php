@props([
    'cta' => 'Request a demo',
    'href' => route('request-demo'),
])

@if(!empty($href))

    @php
        $merge['class'] = 'btn fw-semibold text-nowrap';
        if(strpos($attributes['class'], 'btn-outline-')===false) {
            $merge['class'].= ' btn-secondary';
        }
    @endphp

    <a {{ $attributes->merge($merge) }} href="{{ $href }}">
        {{ !$slot->isEmpty()?$slot:$cta }}
    </a>

@endif