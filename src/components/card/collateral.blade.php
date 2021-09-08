{{-- @dd($collateral) --}}
@php
    $isForm = $collateral->asset_type == "Form";
    if($isForm){
        $url = "/resources/collateral-library".$collateral->url;
    } else {
        $url = $collateral->link_data->link->href;
    }
    // dd($isForm);
    // if(!isset($url)){
    //     $url = route('blog.show', ['category'=>$article->category->slug, 'slug'=>trim($article->url, '/')]);
    // }

@endphp

<a href="{{ $url }}" {{ $isForm?"":"target='blank'" }} class="d-block w-100">
    <div class="card shadow-light-lg h-100" style="padding-bottom:80px;">
        <div class="card-img-top" href="{{ $url }}">
            <div class="card-thumbnail ratio-16/9 rounded-top bgs-cover bgp-cc" style="background-image:url('{{ $collateral->asset_image->url ?? 'https://images.contentstack.io/v3/assets/blt47a327ac368e22cd/bltd7d82604e76bab42/5ffb1fc21166ce7d2ed1cdea/blog-2.jpg' }}');"></div>
        </div>

        <div class="position-relative">
            <div class="shape shape-fluid-x shape-bottom svg-shim text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
            </div>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <span class="badge badge-lg badge-rounded-circle bg-primary-soft">
                    {{ $collateral->asset_category->value }}
                </span>
            </div>

            <h3 class="h6">{!! $collateral->title !!}</h3>
        </div>

        {{-- <div class="card-meta position-absolute bottom-0 w-100">
            <hr class="card-meta-divider">

            <div class="avatar avatar-sm me-2">
                <img src="https://uikit.marketing.dev.elliemae.io/assets/img/photos/photo-7.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
        </div> --}}
    </div>
</a>