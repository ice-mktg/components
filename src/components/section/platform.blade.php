
@props([
    'exclude' => [],
])
@php
    $merge = ['class' => 'bg-iceblue-100'];

@endphp

<x-section {{ $attributes->merge($merge) }}>
    <x-molecule.intro>
        <x-atomic.eyebrow>Your end-to-end workflow</x-atomic.eyebrow>
        <h3>Streamline every step of the mortgage process</h3>
        <p>The ICE Mortgage Technology Platform delivers a true digital mortgage experience across your entire workflow. Our technology enables mortgage professionals across the industry to focus on personal connections where they need it most, and provide borrowers with a better homeownership journey.</p>
    </x-molecule.intro>

    <div class="row justify-content-center text-center mt-6">
        @php $colspan = 3; @endphp
        <x-molecule.icon :icon="icemt('svg/em/digital-mortgage.svg')" colspan="{{ $colspan }}">
            {{-- <h4>Lorem ipsum dolor sit amet</h4> --}}
            <p>ICE Mortgage Technology offers a truly differentiated digital platform that provides straight-through processing for a more comprehensive end-to-end workflow than any other provider in the market.</p>
            <x-atomic.link-angle href="{{ route('sales-and-marketing') }}">Sales &amp; Marketing Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('lending') }}">Lending Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('secondary-marketing') }}">Secondary Marketing Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('correspondent-lending') }}">Correspondent Lending Solutions</x-atomic.link-angle>
        </x-molecule.icon>

        <x-molecule.icon :icon="icemt('svg/em/mortgage.svg')" colspan="{{ $colspan }}">
            {{-- <h4>Lorem ipsum dolor sit amet</h4> --}}
            <p>As a technology leader in the mortgage industry, we’re focused on automating the entire process from consumer engagement through loan registration and every step and task in between.</p>
            <x-atomic.link-angle href="{{ route('eclosing') }}">eClosing Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('loan-registry') }}">Loan Registration Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('settlement-collaboration') }}">Settlement Collaboration Solutions</x-atomic.link-angle>
        </x-molecule.icon>

        <x-molecule.icon :icon="icemt('svg/em/resources.svg')" colspan="{{ $colspan }}">
            {{-- <h4>Lorem ipsum dolor sit amet</h4> --}}
            <p>Our industry-leading solutions are what power this incredible network. While offering comprehensive integration and an end-to-end solution, ICE Mortgage Technology is also open and flexible, giving customers greater choice to use the technologies or partners that are ideal for their businesses.</p>
            <x-atomic.link-angle href="{{ route('intelligent-automation') }}">Intelligent Automation Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('data-and-analytics') }}">Data and Analytics Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('partner-network') }}">Partner Network Solutions</x-atomic.link-angle>
            <x-atomic.link-angle href="{{ route('compliance') }}">Compliance Solutions</x-atomic.link-angle>
        </x-molecule.icon>
    </div>
</x-section>
