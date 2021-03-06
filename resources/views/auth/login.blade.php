@extends('layouts.main')

@section('sidebar')
	@include("auth.sidebar")
	@parent
@stop

@section('content')
	@if($errors->any())
		<aside id="errors">
			<p>One or more errors occurred</p>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</aside>
		<br>
	@endif

	<form name="login" method="post" action="{{ secure_url('/auth/login') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<h4>Username</h4>
		<div>
			<input type="text" name="username" required placeholder="your username">
			<aside>
				<p></p>
			</aside>
		</div>

		<h4>Password</h4>
		<div>
			<input type="password" name="password" required placeholder="your password">
			<aside>
				<p></p>
			</aside>
		</div>

		<div style="display: inline-block; float: left;">
			<button type="button" style="display: inline-block" onclick="history.back();">cancel</button>
		</div>

		<div style="display: inline-block; float: right;">
			<button type="submit" style="display: inline-block">log me in!</button>
		</div>
	</form>
@stop
