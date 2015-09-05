<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="application-name" content="{{ Config::get('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:site_name" content="{{ Config::get('app.name') }}">
<meta property="og:type" content="website">

@if(!empty($page_title))
    <meta property="og:title" content="{{ $page_title }} | {{ Config::get('app.name') }}">
@endif

@if(!empty($page_keywords))
    <meta name="keywords" content="{{ $page_keywords }}">
@else
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
@endif

@if(!empty($page_desc))
    <meta name="description" content="{{ $page_desc }}">
    <meta property="og:description" content="{{ $page_desc }}">
@else
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta property="og:description" content="{{ env('APP_DESC') }}">
@endif

@if(!empty($page_image))
    <meta property="og:image" content="{{ $page_image }}">
@else
    <meta property="og:image" content="{{ Config::get('app.assets_url') }}/img/icon/favicon-1600x800.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1600">
    <meta property="og:image:height" content="800">
@endif

<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="{{ Config::get('app.assets_url') }}/img/icon/mstile-144x144.png">
<meta name="msapplication-square70x70logo" content="{{ Config::get('app.assets_url') }}/img/icon/mstile-70x70.png">
<meta name="msapplication-square150x150logo" content="{{ Config::get('app.assets_url') }}/img/icon/mstile-150x150.png">
<meta name="msapplication-wide310x150logo" content="{{ Config::get('app.assets_url') }}/img/icon/mstile-310x150.png">
<meta name="msapplication-square310x310logo" content="{{ Config::get('app.assets_url') }}/img/icon/mstile-310x310.png">
<link rel="icon" type="image/png" sizes="96x96" href="{{ Config::get('app.assets_url') }}/img/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ Config::get('app.assets_url') }}/img/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ Config::get('app.assets_url') }}/img/icon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="128x128" href="{{ Config::get('app.assets_url') }}/img/icon/favicon-128x128.png">
<link rel="icon" type="image/png" sizes="196x196" href="{{ Config::get('app.assets_url') }}/img/icon/favicon-196x196.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ Config::get('app.assets_url') }}/img/icon/apple-touch-icon-152x152.png">
