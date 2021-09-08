@props([
    'categories',
])

@foreach($categories as $category)
    @php $cat = config('icemt-platform.'.$category); @endphp

    @if(!empty($cat))
    <div class="col-lg-6 col-xl-4 mb-9">
        @if(count($cat['links'])==1)
        <x-card.icon
            class="base"
            :href="route('tpo-connect')"
            :href="isset($cat['links'][0]['route'])?route($cat['links'][0]['route']):url($cat['links'][0]['href']??'#')"
            :cta="$cat['links'][0]['cta']??'Learn more'"
            :target="$cat['links'][0]['target']??'_self'"
            >
            <img class="svg-lg mb-6" src="{{ isset($cat['icon'])?icemt('svg/em/'.$cat['icon'].'.svg'):'https://static.icemortgagetechnology.com/icemt/assets/FPO-icon.png' }}" alt="" />
            <h4>{{ $cat['title'] }}</h4>
            {!! wpautop($cat['description']) !!}
        </x-card.icon>
        @else
        <x-card.icon
            class="base"
            unwrap
            >
            <img class="svg-lg mb-6" src="{{ isset($cat['icon'])?icemt('svg/em/'.$cat['icon'].'.svg'):'https://static.icemortgagetechnology.com/icemt/assets/FPO-icon.png' }}" alt="" />
            <h4>{{ $cat['title'] }}</h4>
            {!! wpautop($cat['description']) !!}

            <x-slot name="links">
                @foreach($cat['links'] as $link)
                <x-atomic.link-angle
                    class="my-2"
                    :href="isset($link['route'])?route($link['route']):url($link['href']??'#')"
                    :target="$link['target']??'_self'"
                >{{ $link['cta']??'Learn more' }}</x-atomic.link-angle>
                @endforeach
            </x-slot>
        </x-card.icon>
        @endif
    </div>
    @endif
@endforeach