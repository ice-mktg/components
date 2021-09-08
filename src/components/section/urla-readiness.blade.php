@php
    $merge = ['class' => 'py-11'];

    if(!empty($background))
    {
        $merge['style'] = "background-image:url('".$background."')";
    }
@endphp

<x-section.river
    :image="icemt('urla-readiness-airstream.jpg')"
    {{ $attributes->merge($merge) }}
>
    <x-atomic.eyebrow></x-atomic.eyebrow>
    <h3>Ready for URLA, right now</h3>
    <p>When it comes to the new URLA, ICE Mortgage Technology is once again ahead of the curve. We’re providing comprehensive support across the entire digital lending platform, from point-of-sale to origination through closing, and delivery to the secondary market. This holistic approach ensures that every Encompass lender will have what they need to do business without interruption.</p>
    <p class="mb-6">Be sure to check our frequently-updated URLA Readiness Page to access the latest information, including readiness guides, webinars, and other helpful resources.</p>
    <x-atomic.link-angle :href="route('urla-readiness')">Visit the URLA Readiness page</x-atomic.link-angle>
</x-section.river>
