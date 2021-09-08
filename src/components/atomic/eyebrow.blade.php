@props(['azure'])

@php
    $merge['class'] = 'eyebrow d-inline-block fs-sm fw-semibold text-uppercase pb-2'.(!empty($azure)?' azure':' mb-6');
@endphp

<div {{ $attributes->merge($merge)}}>
    {{ !$slot->isEmpty() ? $slot : 'Eyebrow lorem ipsum' }}
</div>