@props([
    'eyebrow' => '',
    'price' => '$0',
])
<div class="component-price card shadow">
    <div class="card-header bg-iceblue-100 border-0 py-6">
        <div class="fw-semibold mb-3">{{ $eyebrow??'' }}</div>
        <div class="fs-4">{{ $price??'' }}</div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>