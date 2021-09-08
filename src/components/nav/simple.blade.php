@props([
    'heading' => '',
    'description' => '',

    'icon' => '',
    'route' => '',
    'label' => '',
    'solo' => '',
])

@if(!empty($heading) || !empty($description))
<div class="subtro mb-4">
    <p class="text-uppercase fw-semibold fs-xs mb-1">{{ $heading }}</p>
    <p class="fs-xs mb-0">{{ $description }}</p>
</div>
@endif

<div class="simple mb-3">
{{ $slot }}
</div>

@if(!empty($href))
<div class="solo">
    <x-nav.menu
        :icon="$icon"
        :href="$href"
        :label="$label"
    >{{ $solo }}</x-nav.menu>
</div>
@endif
