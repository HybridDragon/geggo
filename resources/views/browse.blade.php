@extends('layouts.main')

@section('sidebar')
	@include("static.sidebar")
	@parent
@stop

@section('content')
		@forelse($files as $file)
		<ul>
			<li>
				<a href="{{ $file->url }}">ID: {{ $file->id }}</a>
			</li>
			<li>Uploader ID: {{ $file->uploader }}</li>
			<li>Name: {{ $file->name }}</li>
			<li>URL: {{ $file->url }}</li>
			<li>Upload date: {{ $file->created_at }}</li>
		</ul>
		<br>
		@empty
			<p>No files</p>
		@endforelse
@stop
