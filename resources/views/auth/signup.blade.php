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

	<form name="signup" method="post" action="{{ secure_url('/auth/signup') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<h4>Username</h4>
		<div>
			<input type="text" name="username" required placeholder="a sweet username">
			<aside>
				<p>Your username should be something unique to you as it will be used to identify you, a nickname you use is generally the way to go.</p>
			</aside>
		</div>

		<h4>Email address</h4>
		<div>
			<input type="email" name="email" required placeholder="your awesome email">
			<aside>
				<p>We'll need your email address so we can send you a few things such as password reset requests and notifications.</p>
			</aside>
		</div>

		<h4>Password</h4>
		<div>
			<input type="password" name="password" required placeholder="a secure password">
			<aside>
				<p>A strong password is typically made up of a combination of letters, numbers and symbols. Try using a short, memorable phrase and replace some of the characters with numbers or symbols.</p>
			</aside>
		</div>

		<h4>Password confirmation</h4>
		<div>
			<input type="password" name="password_confirmation" required placeholder="your password again">
			<aside>
				<p>We're noting down your password again so that we don't save an incorrect password.</p>
			</aside>
		</div>

		<input type="submit" value="sign me up!">
	</form>
@stop
