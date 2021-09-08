@props(['testimonial'])

@if(!empty($testimonial['eyebrow']))
<x-atomic.eyebrow>{{ $testimonial['eyebrow'] }}</x-atomic.eyebrow>
@endif

<div class="molecule-testimonial">
    @if(!empty($testimonial['logo']))
        @if($testimonial['logo'] == 'fpo')
        <img class="d-block mx-auto mb-6 d-block" width="220" height="110" src="https://via.placeholder.com/220x110/FF00CC/FFFFFF?text=?" alt="" />
        @else
        <img class="d-block mx-auto mb-6 d-block" {!! imgsrc(icemt($testimonial['logo'])) !!} alt="" width="155" height="75" />
        @endif
    @endif

    <blockquote>
        <p class="h{{ empty($video)?2:4 }} text-lawn mb-6">“{!! $testimonial['quote'] !!}”</p>
        <cite class="fst-normal text-jetblack-400">
            {!! wpautop($testimonial['cite']) !!}
        </cite>
    </blockquote>

    @if(!empty($testimonial['href']))
    <x-atomic.link-angle
        class="text-lawn mt-6"
        :href="$testimonial['href']"
        :target="$testimonial['target']??''"
    >{{ $testimonial['cta']??'Learn more' }}</x-atomic.link-angle>
    @endif
</div>
