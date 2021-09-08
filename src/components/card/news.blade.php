{{-- @dd($article) --}}

<a class="text-decoration-none w-100" href="{{ $article->article_url }}" target="_blank">
    <div class="card mb-6 mb-lg-0 shadow-light-lg h-100">
        <div class="card-body d-flex">
            <div class="col">
                <p class="fs-sm text-uppercase text-muted mb-0 ms-auto"><time datetime="05.02.2019">{{ date('m.d.Y', strtotime($article->news_date)) }}</time></p>
            </div>
            <div class="col-lg-7 px-3">
                <h3 class="h6">{{ $article->news_title }}</h3>
            </div>
            <div class="col-lg-3">
                <p class="text-muted">{{ $article->publishers_name }}</p>
            </div>
        </div>
    </div>
</a>
