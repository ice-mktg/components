@php
    $merge = ['class' => 'section-default'];

    $hasIntro = $intro??false;
    $hasOutro = $outro??false;
@endphp

<section {{ $attributes->merge($merge) }}>
    {{ $before??'' }}
    <div class="container">
        @if($hasIntro)
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                {{ $intro??'' }}
            </div>
        </div>
        @endif

        {{ $slot }}

        @if($hasIntro)
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                {{ $outro??'' }}
            </div>
        </div>
        @endif
    </div>
    {{ $after??'' }}
</section>
