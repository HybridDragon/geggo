@extends('layouts.main')

@section('content')
	<form name="signup" method="post" action="{{ action('AuthController@signup') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div>
			<input type="text" name="username" required placeholder="a sweet username">
			<input type="email" name="email" required placeholder="your awesome email">
			<input type="password" name="password" required placeholder="a secure password">
			<input type="password" name="password-confirm" required placeholder="your password again">

			<input type="submit" value="sign me up!">
		</div>

		<aside>
			<p id="signup-tips"></p>
			<p id="username-input-tips">Will be used to identify you, use something unique</p>
			<p id="email-input-tips">So we can send you notifications (not spam)</p>
			<p id="password-input-tips">Something that's hard for others to guess</p>
			<p id="password-confirm-input-tips">Confirm your password so we don't get it wrong</p>
		</aside>
	</form>
@stop