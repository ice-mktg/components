{{-- @dd($article) --}}

<div class="card shadow-light-lg lift" style="padding-bottom:80px;">
    <a class="card-img-top" href="{{ route('blog.show', ['category'=>$article->category->slug, 'slug'=>trim($article->url, '/')]) }}">
        <div class="card-thumbnail ratio-16/9 rounded-top bgs-cover bgp-cc" style="background-image:url('{{ $article->thumbnail->url ?? 'https://images.contentstack.io/v3/assets/blt47a327ac368e22cd/bltd7d82604e76bab42/5ffb1fc21166ce7d2ed1cdea/blog-2.jpg' }}');"></div>
    </a>

    <div class="position-relative">
        <div class="shape shape-fluid-x shape-bottom svg-shim text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
        </div>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <a class="badge badge-lg badge-rounded-circle bg-primary-soft" href="{{ route('blog.category', ['category'=>$article->category->slug]) }}">
                {{ $article->category->value }}
            </a>
        </div>

        <a class="text-decoration-none" href="{{ route('blog.show', ['category'=>$article->category->slug, 'slug'=>trim($article->url, '/')]) }}">
            <h3 class="h6">{!! $article->title !!}</h3>
        </a>
    </div>

    <div class="card-meta position-absolute bottom-0 w-100">
        <hr class="card-meta-divider">

        <div class="avatar avatar-sm me-2">
            <img src="https://uikit.marketing.dev.elliemae.io/assets/img/photos/photo-7.jpg" alt="..." class="avatar-img rounded-circle">
        </div>

        <p class="fs-sm text-uppercase text-muted me-2 mb-0">{{ $article->contributor_name }}</h6>
        <p class="fs-sm text-uppercase text-muted mb-0 ms-auto"><time datetime="2019-05-02">{{ date('Y-m-d', strtotime($article->blog_date)) }}</time></p>
    </div>
</div>