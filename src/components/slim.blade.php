@props([
    'icon' => '',
    'href' => '',
    'cta' => 'Learn more',
])

<div class="component-slim col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-9">
    <x-card.icon
        :icon="$icon"
        :href="$href"
        :cta="$cta"
        class="slim"
    >{{ $slot }}</x-card.icon>
</div>