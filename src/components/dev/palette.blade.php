<div class="fs-xs p-6 mb-6 bg-white">
    <div class="row g-0">
        <div class="col-auto fs-xs text-center">
            <div>&nbsp;</div>
            <div class="p-2">100</div>
            <div class="p-2">200</div>
            <div class="p-2">300</div>
            <div class="p-2">400</div>
            <div class="p-2 my-2">500</div>
            <div class="p-2">600</div>
            <div class="p-2">700</div>
            <div class="p-2">800</div>
            <div class="p-2">900</div>
        </div>

        @foreach(['iceblue', 'jetblack', 'coolgray', 'cornflower', 'cerulean', 'azure', 'lawn', 'marigold', 'green', 'yellow', 'red'] as $color)
        <div class="col fs-xs text-center">
            <div class="text-center">{{ $color }}</div>

            @for($i=100;$i<=900;$i+=100)
            <div class="p-2 bg-{{ $color }}-{{ $i }}{{ $i==500?' my-2':'' }}">
                @switch($i)
                    @case('100') 20% @break
                    @case('200') 40% @break
                    @case('300') 60% @break
                    @case('400') 80% @break
                    @case('500') 100% @break
                    @case('600') &nbsp; @break
                    @case('700') &nbsp; @break
                    @case('800') &nbsp; @break
                    @case('900') &nbsp; @break
                @endswitch
            </div>
            @endfor
        </div>

        @if(in_array($color, ['coolgray', 'marigold'])) <div class="col-auto px-1"></div> @endif
        @endforeach
    </div>
</div>