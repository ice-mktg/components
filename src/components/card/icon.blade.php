@props([
    'icon',
    'href' => '#',
    'cta' => 'Learn more',
    'orientation' => 'vertical',
    'target',
    'videoId',
])

@php
    if($videoId??false)
    {
        $href = 'javascript:void(0);';
    }

    $hasMeta = isset($meta) && !$meta->isEmpty();
    $hasLinks = isset($links) && !$links->isEmpty();
    $tagOpen = !isset($attributes['unwrap'])?'a href="'.$href.'"':'span';
    $tagClose = !isset($attributes['unwrap'])?'a':'span';
    $attributes = $attributes->exceptProps(['unwrap']);

    $merge = ['class' => 'component-icon group text-decoration-none d-block w-100 h-100 text-jetblack orientation-'.$orientation];

    if(!empty($target))
    {
        $merge['target'] = $target;
    }

    if($videoId??false)
    {
        $merge['class'].= ' vidyard-player-embed';
        $merge['data-uuid'] = $videoId;
        $merge['data-v'] = '4';
        $merge['data-type'] = 'lightbox';
        $merge['onclick'] = "launchLightbox('".$videoId."')";
    }
@endphp

<{!! $tagOpen !!} {{ $attributes->merge($merge) }}>
    <div class="card shadow h-100">
        <div class="card-body h-100">
            @if(!empty($icon))
            <p><img class="ico mb-4" src="{{ $icon }}" alt=""></p>
            @endif

            {{ $slot }}
        </div>
        <div class="card-footer bg-white">
            @if($hasMeta)
            <div class="card-meta">{{ $meta }}</div>
            @endif

            @if($hasLinks)
            {!! $links !!}
            @else
            <div class="text-azure my-n2">
                <x-atomic.link-angle class="group-hover:underline" unwrap>{{ $cta }}</x-atomic.link-angle>
            </div>
            @endif
        </div>
    </div>
</{{ $tagClose }}>
