@props(['unwrap', 'inline', 'videoId'])

@php
    $merge = ['class' => 'atom-link-angle d-inline-block'];

    if(!isset($inline))
    {
        $merge['class'].= ' my-2';
    }

    $tag = 'span';
    if(!isset($unwrap))
    {
        $tag = 'a';
        $merge['href'] = '#';
    }

    if($videoId??false)
    {
        $merge['href'] = 'javascript:void(0);';
        $merge['class'].= ' vidyard-player-embed';
        $merge['data-uuid'] = $videoId;
        $merge['data-v'] = '4';
        $merge['data-type'] = 'lightbox';
        $merge['onclick'] = "launchLightbox('".$videoId."')";
    }
@endphp

@if($videoId??false)
<span class="vidyard-fakery">
@endif

<{{ $tag }} {{ $attributes->merge($merge) }}>
    @php
        $str = !empty($slot->__toString()) ? $slot->__toString() : 'Learn more';

        $str = explode(' ', $str);

        array_splice($str, count($str)-1, 0, '<span class="text-nowrap">');

            
        if($videoId??false):
            $str[] = '
            <svg height="24" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-play-circle fa-w-16 fa-2x" color="#e5740b"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z" class=""></path></svg>
            ';
        else:
            $str[] = '
            <svg width="8" height="16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                </svg>
                ';
        endif;
        $str[] = '</span>';

        echo implode(' ', $str);
    @endphp
</{{ $tag }}>

@if($videoId??false)
</span>
@endif

@if(!isset($inline))
<br />
@endif