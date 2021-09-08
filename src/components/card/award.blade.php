{{-- @dd($article) --}}

<div class="card shadow-light h-100">
    <div class="card-body text-center">
        <h5 class="text-blue">{{ $article->title ?? '' }}</h5>
        <div style="height: 205px;">
            <img style="max-height: 80%; max-width:80%; position: relative; top: 50%; transform: translateY(-50%)" class="align-center d-inline-block" src="{{ $article->award_logo[0]->url ?? 'https://corpweb-em-ui-kit.elliemae.com/v1/img/icon/trophy-cup.svg' }}">
        </div>
        <div>{{ $article->modular_blocks[0]->recipient->name ?? '' }}</div>
        <div>{{ $article->modular_blocks[0]->recipient->title ?? '' }}</div>
    </div>
</div>
