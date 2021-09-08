@props([
    'share' => ['fb', 'tw', 'li', 'yt'],
    'title' => '',
    'url' => '',
])

@foreach($share as $s)
    @switch($s)
        @case('fb')
        <a
            class="d-inline-block m-2"
            href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank"
            title="ICE Mortgage Technology's Facebook"
            onclick="window.dataLayer.push({
                'event':'trackEvent',
                'eventCategory':'external links',
                'eventAction':'click',
                'eventLabel':'https://www.facebook.com/sharer/sharer.php?u={{ $url }}',
                'nonInteraction': false
            })">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                <defs>
                    <clipPath id="clip-sprite-social-facebook">
                        <rect width="24" height="24"/>
                    </clipPath>
                </defs>
                <g id="sprite-social-facebook" clip-path="url(#clip-sprite-social-facebook)">
                    <g id="Group_3368" data-name="Group 3368">
                        <rect id="Rectangle_3389" data-name="Rectangle 3389" width="24" height="24" fill="rgba(255,255,255,0)"/>
                        <path id="facebook" d="M24,12.073A12,12,0,1,0,10.125,23.927V15.542H7.078v-3.47h3.047V9.43c0-3.007,1.792-4.669,4.533-4.669A18.418,18.418,0,0,1,17.344,5V7.949H15.83a1.735,1.735,0,0,0-1.956,1.874v2.25H17.2l-.532,3.47h-2.8v8.385A12,12,0,0,0,24,12.073Z" transform="translate(0 -0.073)"
                        fill="#009fc7"/>
                    </g>
                </g>
            </svg>
        </a>
        @break

        @case('tw')
        <a
            class="d-inline-block m-2"
            href="https://twitter.com/share" target="_blank"
            title="ICE Mortgage Technology's Twitter"
            onclick="window.dataLayer.push({
                'event':'trackEvent',
                'eventCategory':'external links',
                'eventAction':'click',
                'eventLabel':'https://twitter.com/share',
                'nonInteraction': false
            })">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                <defs>
                    <clipPath id="clip-sprite-social-twitter">
                        <rect width="24" height="24"/>
                    </clipPath>
                </defs>
                <g id="sprite-social-twitter" clip-path="url(#clip-sprite-social-twitter)">
                    <g id="Group_3369" data-name="Group 3369">
                        <rect id="Rectangle_3389" data-name="Rectangle 3389" width="24" height="24" fill="rgba(255,255,255,0)"/>
                        <path id="twitter" d="M23.953,4.57a10,10,0,0,1-2.825.775,4.958,4.958,0,0,0,2.163-2.723,10.163,10.163,0,0,1-3.127,1.184A4.92,4.92,0,0,0,11.78,8.288,13.938,13.938,0,0,1,1.64,3.162,4.822,4.822,0,0,0,.974,5.637a4.921,4.921,0,0,0,2.188,4.1A4.9,4.9,0,0,1,.934,9.117v.06A4.923,4.923,0,0,0,4.88,14a5,5,0,0,1-2.212.085,4.936,4.936,0,0,0,4.6,3.417,9.867,9.867,0,0,1-6.1,2.1A10.444,10.444,0,0,1,0,19.544a14,14,0,0,0,7.557,2.209,13.9,13.9,0,0,0,14-13.985c0-.21,0-.42-.015-.63A9.935,9.935,0,0,0,24,4.59Z" transform="translate(0 -0.247)"
                        fill="#009fc7"/>
                    </g>
                </g>
            </svg>
        </a>
        @break

        @case('li')
        <a
            class="d-inline-block m-2"
            href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $url }}" target="_blank"
            title="ICE Mortgage Technology's LinkedIn"
            onclick="window.dataLayer.push({
                'event':'trackEvent',
                'eventCategory':'external links',
                'eventAction':'click',
                'eventLabel':'http://www.linkedin.com/sharearticle?mini=true&amp;url={{ $url }}',
                'nonInteraction': false
            })">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                <defs>
                    <clipPath id="clip-sprite-social-linkedin">
                        <rect width="24" height="24"/>
                    </clipPath>
                </defs>
                <g id="sprite-social-linkedin" clip-path="url(#clip-sprite-social-linkedin)">
                    <g id="Group_3370" data-name="Group 3370">
                        <rect id="Rectangle_3389" data-name="Rectangle 3389" width="24" height="24" fill="rgba(255,255,255,0)"/>
                        <path id="linkedin" d="M20.447,20.452H16.893V14.883c0-1.328-.027-3.037-1.852-3.037-1.853,0-2.136,1.445-2.136,2.939v5.667H9.351V9h3.414v1.561h.046a3.745,3.745,0,0,1,3.37-1.85c3.6,0,4.267,2.37,4.267,5.455v6.286ZM5.337,7.433A2.064,2.064,0,1,1,7.4,5.368,2.062,2.062,0,0,1,5.337,7.433ZM7.119,20.452H3.555V9H7.119ZM22.225,0H1.771A1.75,1.75,0,0,0,0,1.729V22.271A1.749,1.749,0,0,0,1.771,24H22.222A1.756,1.756,0,0,0,24,22.271V1.729A1.756,1.756,0,0,0,22.222,0Z"
                        fill="#009fc7"/>
                    </g>
                </g>
            </svg>
        </a>
        @break

        @case('yt')
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
            <defs>
                <clipPath id="clip-sprite-social-youtube">
                    <rect width="24" height="24"/>
                </clipPath>
            </defs>
            <g id="sprite-social-youtube" clip-path="url(#clip-sprite-social-youtube)">
                <g id="Group_3371" data-name="Group 3371">
                    <rect id="Rectangle_3389" data-name="Rectangle 3389" width="24" height="24" fill="rgba(255,255,255,0)"/>
                    <path id="youtube" d="M23.5,6.186A3.016,3.016,0,0,0,21.376,4.05C19.5,3.545,12,3.545,12,3.545s-7.505,0-9.377.505A3.017,3.017,0,0,0,.5,6.186,31.6,31.6,0,0,0,0,12a31.6,31.6,0,0,0,.5,5.814A3.016,3.016,0,0,0,2.624,19.95c1.871.5,9.376.5,9.376.5s7.505,0,9.377-.5A3.015,3.015,0,0,0,23.5,17.814,31.665,31.665,0,0,0,24,12,31.6,31.6,0,0,0,23.5,6.186ZM9.545,15.568V8.432L15.818,12Z" transform="translate(0 0.455)"
                    fill="#009fc7"/>
                </g>
            </g>
        </svg>
        @break

        @case('em')
        <a
            class="d-inline-block m-2"
            href="mailto:?subject=ICE Mortgage Technology blog article.&amp;body=Check out this site: https://www.icemortgagetechnology.com/{{ request()->path() }}"
            title="ICE Mortgage Technology's Blog"
            onclick="window.dataLayer.push({
                'event':'trackEvent',
                'eventCategory':'external links',
                'eventAction':'click',
                'eventLabel':'mailto:?subject=ice mortgage technology blog article.&amp;body=check out this site: https://www.icemortgagetechnology.com/{{ request()->path() }}',
                'nonInteraction': false
            })">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                <defs>
                    <clipPath id="clip-sprite-social-email-azure">
                        <rect width="24" height="24"/>
                    </clipPath>
                </defs>
                <g id="sprite-social-email-azure" clip-path="url(#clip-sprite-social-email-azure)">
                    <path id="Path_6900" data-name="Path 6900" d="M976.136,310.176a12,12,0,1,0,12,12A12,12,0,0,0,976.136,310.176Zm6.892,15.876a1.287,1.287,0,0,1-1.292,1.292h-11.2a1.287,1.287,0,0,1-1.292-1.292v-5.492a.147.147,0,0,1,.094-.148.174.174,0,0,1,.175.013q.888.673,4.146,3.042.054.054.363.3t.5.363q.188.121.484.3a2.479,2.479,0,0,0,.579.256,2,2,0,0,0,.552.081,1.8,1.8,0,0,0,.485-.067,3.406,3.406,0,0,0,.458-.161,3,3,0,0,0,.458-.256q.242-.161.4-.283l.377-.283a3.109,3.109,0,0,0,.3-.242q3.176-2.288,4.146-3.042a.133.133,0,0,1,.175-.027.175.175,0,0,1,.094.162Zm0-7.242a.613.613,0,0,1-.242.511q-1.319,1.023-4.684,3.473a2.922,2.922,0,0,0-.39.283q-.363.283-.552.4a4.672,4.672,0,0,1-.5.269,1.005,1.005,0,0,1-1.05,0,4.6,4.6,0,0,1-.5-.269q-.189-.121-.552-.4a2.95,2.95,0,0,0-.39-.283q-3.285-2.4-4.684-3.473a.613.613,0,0,1-.242-.511V318.3a1.287,1.287,0,0,1,1.292-1.292h11.2a1.287,1.287,0,0,1,1.292,1.292Z" transform="translate(-964.136 -310.176)"
                    fill="#009fc7"/>
                </g>
            </svg>
        </a>
        @break
    @endswitch
@endforeach
