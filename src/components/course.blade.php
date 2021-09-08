{{-- Education courses --}}

@props([
    'course' => '',
    'type' => ''
])
@php
//$courseType = (($course->type??'') == "Classroom")?'Onsite Classroom':'Instructor-led Online Course';
$courseType = ($course->type??'');
if ($courseType == "Online" || $courseType == "Web-based"){ $courseType = "On Demand Self-Study Course"; }
else if ($courseType == "Virtual Class Online" || $courseType == "Classroom and Virtual Class Online"){ $courseType = "Instructor-led Online Course"; }
else if ($courseType == "Classroom"){ $courseType = "Onsite Classroom"; }
@endphp

@switch($type)
    @case('description')
    {{-- title, description, hr, cta --}}
    <x-card.icon
        {{ $attributes->merge(['class'=>'lean hr']) }}
        :href="route('education.show', ['slug'=>parse_url($course->url)['path']])"
        cta="View course"
        >
        <h3>{{ $course->title }}</h3>
        <p class="text-jetblack-300">{{ $course->excerpt }}</p>

        <x-slot name="meta">&nbsp;</x-slot>
    </x-card.icon>
    @break

    @case('price')
    {{-- type, title, price, hr, cta --}}
    <x-card.icon
        {{ $attributes->merge(['class'=>'lean']) }}
        :href="parse_url($course->url)['path']"
        cta="View course"
        >
        <div class="text-uppercase fs-xs text-jetblack-300 mb-4">{{ $courseType }}</div>
        <h3>{{ $course->title }}</h3>

        <x-slot name="meta">
            <span class="fs-base fw-semibold">{{ $course->price }}</span>
        </x-slot>
    </x-card.icon>
    @break

    @default
    {{-- type, title, date, time, seats, hr, cta --}}
    <x-card.icon
        {{ $attributes->merge(['class'=>'lean']) }}
        :href="parse_url($course->url)['path'].'?id='.$course->id"
        cta="View course"
        >
        <div class="text-uppercase fs-xs text-jetblack-300 mb-4">{{ $courseType }}</div>
        <h3>{{ $course->title }}</h3>

        <x-slot name="meta">
            <span class="text-jetblack-300">
                {{ $course->date }}
                <br />
                {{ $course->time }} PT
                <br />
                <span class="text-marigold">{{ $course->seats }}</span>
            </span>
        </x-slot>
    </x-card.icon>
@endswitch

