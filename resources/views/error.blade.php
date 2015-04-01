@extends('layouts.front')

@section('stylesheets')
	@parent
	<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/error.css">
@stop

@section('splash-content')
	<h1 id="front-splash-logo">Error code: {{ $error_id }}</h1>
	<h1 id="front-splash-logo">aka: {{ $error_name }}</h1>
	<p>{{ $error_desc }}</p>
@stop