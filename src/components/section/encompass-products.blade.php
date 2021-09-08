@php
    $merge = ['class' => 'pb-6'];

    $encompass_products = [
        'consumer-connect' => ['icon'=>'consumer-engagement', 'title'=>'Encompass Consumer Connect'],
        'lo-connect' => ['icon'=>'loan-officer', 'title'=>'Encompass LO Connect'],
        'tpo-connect' => ['icon'=>'high-tech-with-human-touch', 'title'=>'Encompass TPO Connect'],
        'crm' => ['icon'=>'customer-advocacy', 'title'=>'Encompass CRM'],
        'eclose' => ['icon'=>'eclose', 'title'=>'Encompass eClose'],
        'product-and-pricing-service' => ['icon'=>'four01k-matching', 'title'=>'Encompass Product & Pricing Service'],
        'investor-connect' => ['icon'=>'collaboration', 'title'=>'Encompass Investor Connect'],
        'data-connect' => ['icon'=>'custom-data', 'title'=>'Encompass Data Connect'],
        'salesforce-connector' => ['icon'=>'crm', 'title'=>'Encompass Salesforce Connector'],
    ];

@endphp

<x-section {{ $attributes->merge($merge) }}>
    <x-molecule.intro>
        <div class="d-inline-block text-center mb-6">
            <x-nav.menu svg="encompass" unwrap class="product-lockup">Encompass</x-nav.menu>
        </div>
        <h3 class="mb-4">Take your Encompass experience to the next level</h3>
        <p>Leverage solutions across the Encompass platform to make smarter business decisions, lower costs and drive innovation across all your channels.</p>
    </x-molecule.intro>

    <div class="row justify-content-center mt-8">
        @foreach($encompass_products as $slug=>$product)
            @if(request()->route()->getName() != $slug)

            <div class="col-md-6 col-xl-4 mb-8">
                <x-card.icon
                    :icon="icemt('svg/em/'.$product['icon'].'.svg')"
                    :href="route($slug)"
                    :cta="$product['title']"
                    orientation="horizontal"
                ></x-card.icon>
            </div>

            @endif
        @endforeach
    </div>
</x-section>
