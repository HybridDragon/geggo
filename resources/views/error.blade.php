@extends('layouts.splash')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/error.css">
@stop

@section('splash-content')
    <header class="page" id="error">
        <main id="error-content">
            <h2 id="error-logo">Error code: {{ $error_id }} aka &quot;{{ $error_name }}&quot;</h2>
            <p>{{ $error_desc }}</p>
        </main>
    </header>
@stop
