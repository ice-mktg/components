
@php
$merge = ['class' => 'py-11'];
@endphp

<x-section.river
    {{ $attributes->merge($merge) }}
    reverse
    :image="icemt('icemt-professional-services.png')"
>

    <x-atomic.eyebrow>Professional services</x-atomic.eyebrow>
    <h3>Take your business to the next level with ICE Mortgage Technology Professional Services.</h3>
    <p>Offering customizable implementation packages, consulting, custom solutions development, and project management. Our Professional Services representatives are ready to help you optimize your system and improve operational efficiencies so you can get the most out of your investment.</p>
    <x-atomic.link-angle class="mt-4" :href="route('implementation')">See how we ensure a smooth and efficient rollout</x-atomic.link-angle>
</x-section.river>
