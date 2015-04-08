@extends('layouts.main')

@section('content')
	<form name="signup" method="post" action="{{ secure_url('/auth/signup') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div>
			<input type="text" name="username" required placeholder="a sweet username">
			<input type="email" name="email" required placeholder="your awesome email">
			<input type="password" name="password" required placeholder="a secure password">
			<input type="password" name="password-confirm" required placeholder="your password again">

			<input type="submit" value="sign me up!">
		</div>

		<aside>
			<p>test</p>
		</aside>
	</form>
@stop