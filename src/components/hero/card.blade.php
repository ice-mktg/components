@props([
    'image' => 'https://images.contentstack.io/v3/assets/blt47a327ac368e22cd/bltd7d82604e76bab42/5ffb1fc21166ce7d2ed1cdea/blog-2.jpg',
    'href' => '#',
    'target' => '_parent',
])

<section {{ $attributes->merge(['class' => 'section-hero-card d-flex align-items-center py-11']) }}>
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                {{ $slot }}
            </div>

            <div class="col-auto d-none d-lg-block group" style="flex: 0 0 434px;">
                <x-card.default :image="$image" :href="$href" :target="$target">
                    {{ $card }}
                </x-card.default>
            </div>
        </div>
    </div>
</section>