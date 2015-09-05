<!DOCTYPE html>
<html>
    <head>
        <title>
            @if(!empty($page_title))
                {{ $page_title }} |
            @endif
            {{ Config::get('app.name') }}
        </title>

        @include('layouts.sections.meta')

        @section('css')
            <link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/main.css">
            <link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/fonts.css">
            <link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/splash.css">
        @show
    </head>
    <body>
        @include('layouts.sections.menu')

        @yield('splash-content')

        @yield('content')

        @section('javascript')
            <script src="{{ Config::get('app.assets_url') }}/js/jquery.min.js" async></script>
        @show
    </body>
</html>
