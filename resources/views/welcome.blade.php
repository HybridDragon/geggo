@extends('layouts.front')

@section('splash-content')
	<h1 id="front-splash-logo">{{ Config::get('app.name') }}</h1>
	<p>drop file(s) to share.</p>
@stop
