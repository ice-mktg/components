{{-- @dd($article) --}}

<a class="text-decoration-none" href="{{ route('press-releases.show', ['slug'=>trim($article->url, '/')]) }}">
    <div class="card mb-6 mb-lg-0 shadow-light-lg h-100" style="padding-bottom:80px;">
        <div class="card-body">
                <h3 class="h6">{{ $article->pr_title }}</h3>
        </div>

        <div class="card-meta position-absolute bottom-0 w-100">
            <hr class="card-meta-divider">
            <p class="fs-sm text-uppercase text-muted mb-0 ms-auto"><time datetime="05.02.2019">{{ date('m.d.Y', strtotime($article->pr_date)) }}</time></p>
        </div>
    </div>
</a>
