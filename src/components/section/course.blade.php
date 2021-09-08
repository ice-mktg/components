@props(['title', 'share'=>true])

@php
    $req = parse_url(request()->fullUrl());
    $url = 'https://www.icemortgagetechnology.com/'.$req['path'];

    if(isset($req['query']))
    {
        $url.= '?'.$req['query'];
    }

    $merge = ['class' => 'section-course overflow-visible'];

@endphp

<section {{ $attributes->merge($merge) }}>
    <div class="container">
        <div class="row">
            @if($share)
            <div class="col-md-auto">
                <div class="sticky-share mb-6">
                    Share
                    <x-share
                        :share="['em','fb','tw','li']"
                        :title="$title??''"
                        :url="$url"
                    ></x-share>
                </div>
            </div>
            @endif

            <div class="col">
                <div class="row">
                    <div class="col mb-8">
                        <article class="education-post">
                            {{ $article??'' }}
                        </article>
                    </div>

                    <div class="col-lg-auto">
                        <aside class="sticky-detail">
                            {{ $aside??'' }}
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>