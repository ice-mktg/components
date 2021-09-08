{{-- RESOURCES DEFINED IN: config/icemt-resources.php --}}

@props([
    'res',
    'resources' => [
        // DEFAULLTS
        'encompass-product-pricing-service-datasheet',
        'urla-readiness-planning-guide-and-checklist',
        'roi-of-the-ice-mortgage-technology-platform-study',
        'checklist-5-steps-to-digital-closing-success',
    ],
])

@php
    if(count($resources)<2) { return; }

    // if(count($resources))

    // if($res??false)
    // {
    //     $orderstr = "'".implode("','" , $res)."'";

    //     $results = \DB::table('resources')
    //         ->whereIn('id', $res)
    //         ->orderByRaw(\DB::raw("FIELD(id, $orderstr)"))
    //         ->get();
    // }

    $default = ($resources == ['encompass-product-pricing-service-datasheet','urla-readiness-planning-guide-and-checklist','roi-of-the-ice-mortgage-technology-platform-study','checklist-5-steps-to-digital-closing-success']);

    $merge = ['class' => 'section-resources pb-6'];

    if(!empty($background))
    {
        $merge['style'] = "background-image:url('".$background."')";
    }

    $resources = array_map(function($item) {
        return array_merge(['key'=>$item], config('icemt-resources.'.$item)??[]);
    }, $resources);
@endphp

<section {{ $attributes->merge($merge) }}>
    <div class="container">
        <div class="row justify-content-center text-center mb-8">
            <div class="col-md-10">
                @if(!$slot->isEmpty())
                    {{ $slot }}
                @else
                    <h3>Resources</h3>
                    <p>Learn more about how ICE Mortgage Technology is changing the industry and stay up-to-date with the latest tools and information.</p>
                    <x-atomic.link-angle :href="route('collateral-library')">See all resources</x-atomic.link-angle>
                @endif
            </div>
        </div>

        <div class="row justify-content-center"{!! $default?' style="border:4px dashed #ff00cc;"':'' !!}>
            {{-- @foreach($results as $resource)
            <div class="col-md-6 col-xl-3 mb-9">
                <x-card.icon
                    class="lean sm-svg"
                    :icon="icemt('svg/em/'.($resource->icon).'.svg')"
                    :href="'/'.$resource->href"
                    :cta="$resource->cta??'Learn more'"
                    :videoId="$resource->videoId??''"
                    :target="$resource->tab?'_blank':null"
                >{{ $resource->title??'' }}</x-card.icon>
            </div>
            @endforeach --}}
            {{-- @dd($resources) --}}
            @foreach($resources as $resource)
            <div class="col-md-6 col-xl-3 mb-9">
                <x-card.icon
                    class="lean sm-svg"
                    :icon="icemt($resource['icon']??'svg/em/datasheet.svg')"
                    :href="$resource['href']??null"
                    :cta="$resource['cta']??'Learn more'"
                    :videoId="$resource['videoId']??null"
                    :target="$resource['target']??null"
                >{{ $resource['title']??'' }}</x-card.icon>
            </div>
            @endforeach
        </div>
    </div>
</section>
