@props([
    'heading' => '',
    'spies' => [],
    'offset' => -180
])

{{-- @dd($spies) --}}

@php if(empty($spies)) { return; } @endphp

<div class="col-auto d-none d-lg-block px-6" style="flex: 0 0 330px;">
    <div class="position-sticky" style="top: 150px;">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="">{{ $heading }}</h4>
                <ul class="list-unstyled fs-sm pt-0 mb-1">
                    @foreach($spies as $spy)
                    <li class="mt-4">
                        <a
                            class="spy-on-me p-0 text-jetblack"
                            href="#{{ Str::slug($spy) }}"
                            data-scrollto
                            data-target="#{{ Str::slug($spy) }}"
                            data-offset="{{ $offset }}"
                        >{{ $spy }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>