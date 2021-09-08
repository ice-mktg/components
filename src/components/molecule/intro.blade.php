@props(['align'=>'center'])

<div class="molecule-intro row justify-content-center mb-8 text-{{ $align }}">
    <div class="col-md-8">
        {{ $slot }}
    </div>
</div>