@props([
    'stories' => [],
    'limit',
])

@php

    $defaults = [
        'jorge-vidaurrazaga',
        'andria-lightfoot',
        'jeff-douglas',
        'becky-helvey',
    ];

    shuffle($defaults);

    if(!($limit??false))
    {
        $stories = array_slice(array_merge($stories, $defaults), 0, 4);
    }

    $default_image = 'https://images.contentstack.io/v3/assets/blt47a327ac368e22cd/bltd7d82604e76bab42/5ffb1fc21166ce7d2ed1cdea/blog-2.jpg';

    if(empty($stories))
    {
        echo '<div class="alert alert-warning m-0 text-center"><span class="text-redline">section.stories</span> - This module requires an stories attribute!</div>';
        return;
    }

    $merge = ['class' => 'section-stories bg-lawn text-white pb-6'];
    if(!empty($background))
    {
        $merge['style'] = "background-image:url('".$background."')";
    }

    $stories = array_map(function($item) use ($default_image) {
        return array_merge([
            'key' => $item,
            // 'image' => $default_image,
        ], config('icemt-stories.'.$item)??[]);
    }, $stories);

    // dd($stories);
@endphp

<section {{ $attributes->merge($merge) }}>
    <div class="container">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-9">
                @if(!$slot->isEmpty())
                    {{ $slot }}
                @else
                    {{-- <x-atomic.eyebrow></x-atomic.eyebrow> --}}
                    <h3>Customer Success Stories</h3>
                    <p>Thousands of customers use ICE Mortgage Technology to drive business and improve efficiency through cutting-edge digitization. Learn how they leverage innovative technology to provide a high-touch, world-class customer experience.</p>
                    <x-atomic.link-angle :href="route('success-stories')" class="text-white">See our customer stories</x-atomic.link-angle>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($stories as $k=>$story)
            <div class="col-md-6 col-xl-3 mb-9">
                <a
                    href="{{ $story['href']??'#' }}"
                    class="d-block h-100 text-decoration-none group"
                    @if(!empty($story['target']))
                    target="{{ $story['target'] }}"
                    @endif
                    >
                    <div class="card shadow h-100">
                        <div class="card-body p-4 text-jetblack-400 h-100">
                            {{-- <div class="img ratio ratio-1x1 bgs-cover bgp-cc mb-4" style="background-image:url('{{ $story['image'] }}');"></div> --}}
                            @if(!empty($story['image']))
                            <div class="img bgs-cover bgp-cc mb-4" style="background-image:url('{{ $story['image'] }}'); background-repeat:no-repeat; height:175px;"></div>
                            @endif

                            @if(!empty($story['logo']))
                            <img class="mb-4" src="{{ $story['logo'] }}" alt="" height="75" />
                            @endif

                            <blockquote class="mb-0">
                                <p class="fs-lg mb-0">“{{ $story['quote']??'…lorem ipsum dolor sit amet consectetur, adipisicing elit.' }}”</p>
                            </blockquote>
                        </div>

                        <div class="card-foooter px-4 py-2">
                            <x-atomic.link-angle class="text-lawn group-hover:underline" unwrap>{{ $story['cta']??'Learn more' }}</x-atomic.link-angle>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
