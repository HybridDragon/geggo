@extends('layouts.front')

@section('stylesheets')
	@parent
	<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/error.css">
@stop

@section('splash-content')
	<h2 id="front-splash-logo">Error code: {{ $error_id }} aka &quot;{{ $error_name }}&quot;</h2>
	<p>{{ $error_desc }}</p>
@stop