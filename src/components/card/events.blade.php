{{-- @dd($article) --}}
@php
if($article->start_date > date("Y-m-d H:i:s")):
    $conference_date ="";
    if((date('M', strtotime($article->start_date)) == date('M', strtotime($article->end_date))) && ($article->start_date != $article->end_date))
    {
        $conference_date = (date('M', strtotime($article->start_date)) . " <span>". date('j', strtotime($article->start_date)) . " - ". date('j', strtotime($article->end_date)) . ", " . date('Y', strtotime($article->start_date)));
    }
    elseif($article->start_date == $article->end_date)
    {
        $conference_date = (date('M', strtotime($article->start_date)) . " <span>". date('j', strtotime($article->start_date)) . ", " . date('Y', strtotime($article->start_date)));
    }
    else
    {
        $conference_date = (date('M j', strtotime($article->start_date)) . " - ". date('M j', strtotime($article->end_date)) . ", " . date('Y', strtotime($article->start_date)));
    }

@endphp

<div class="col-12 col-md-6 col-lg-4 d-flex mb-8">
    <a class="text-decoration-none d-block w-100" href="{{ $article->conference_link }}" target="blank">
        <div class="card shadow-light-lg h-100" style="padding-bottom:80px;">

            <div class="card-body">
                <h3 class="h6">{!! $conference_date !!}</h3>
            </div>

            <div class="card-body">
                <h3 class="h6">{!! $article->title !!}</h3>
            </div>

            <div class="card-meta position-absolute bottom-0 w-100">
                <hr class="card-meta-divider">
                Visit site
                <div class="avatar avatar-sm me-2">
                    {{-- <img src="https://uikit.marketing.dev.elliemae.io/assets/img/photos/photo-7.jpg" alt="..." class="avatar-img rounded-circle"> --}}
                </div>

            </div>
        </div>
    </a>
</div>
@php
endif;
@endphp