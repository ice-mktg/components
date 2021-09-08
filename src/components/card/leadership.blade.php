{{-- @dd($article) --}}

<a class="card-img-top text-decoration-none" href="{{ route('leadership.show', $article->url) }}">
    <div class="card shadow-light-lg lift">

        <div class="card-body text-center">
                <img style="height: 180px;" class="rounded-circle my-4" src="{{ $article->image[0]->url ?? '' }}">
                <h3 class="text-blue">{{ $article->title ?? '' }}</h3>
                <p>{{ $article->job_title ?? '' }}</p>
        </div>
    </div>
</a>
