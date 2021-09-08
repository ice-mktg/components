@props([
    'exclude' => [],
    'include' => [], // include takes precedence over exclude
    'fields' => [],
    'ctatext' => 'Submit',
    'redirect' => route('thank-you'),
])

@php
    // REMOVE FIELDS WITH EMPTY VALS
    $fields = array_filter($fields, function($item){
        return !empty($item);
    });
    //  dd($fields);
    $sanitizedFields = sanitizedRequestParamsMerge(array_merge([
        'h_lead_source' => 'Website - Form Fill Assets',
        'h_sfdc_campaign_status' => 'Responded',
        'campaignID' => '70180000001FLc3',
        'pardot_form_name' => 'copyOf2016FYDGFormWebsiteDemoRequest-1495546032623',
        'pardot_form_handler' => 'https://go.pardot.com/l/894481/2020-11-16/kdn',
        'timestamp' => Date('Y-m-d H:i:s'),
    ], $fields));
@endphp

<div v-cloak class="shadow p-6">
    {!! !$slot->isEmpty() ? $slot : '<p>Lets schedule your demo</p>' !!}

    <request-demo
        :exclude='{{ json_encode($exclude) }}'
        :include='{{ json_encode($include) }}'
        :fields='{{ json_encode($sanitizedFields) }}'
        ctatext="{{ $ctatext }}"
        redirect="{{ $redirect }}"
    ></request-demo>

    <p class="fs-xs text-muted mb-0">By submitting this form, you agree to receive marketing communications from ICE Mortgage Technology. You can unsubscribe at any time. Your personal information will be handled according to ICE Mortgage Technology’s <a class="text-nowrap" href="{{ route('privacy-policy') }}">Privacy Policy.</a></p>
</div>