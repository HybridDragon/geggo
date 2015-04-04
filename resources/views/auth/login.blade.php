@extends('layouts.main')

@section('content')
	<form name="login" method="post" action="{{ action('AuthController@login') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div>
			<input type="text" name="username" required placeholder="your username">
			<input type="password" name="password" required placeholder="and password">
			<input type="submit" value="log me in!">
		</div>
	</form>
@stop