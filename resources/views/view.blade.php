@extends('layouts.splash')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/error.css">
@stop

@section('splash-content')
    <header class="page" id="view">
        <main id="error-content">
            <h2 id="error-logo">File id: {{ $file->id }}</h2>
        </main>
    </header>
@stop
