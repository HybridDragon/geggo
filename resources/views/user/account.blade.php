@extends('layouts.main')

@section('sidebar')
	<ul>
		<li>
			<a href="#change-username">Change username</a>
		</li>
		<li>
			<a href="#change-email-address">Change email address</a>
		</li>
		<li>
			<a href="#update-password">Update password</a>
		</li>
	</ul>
	<br>
	<hr>
	<br>
	@include("user.sidebar")
	@parent
@stop

@section('content')
	<form name="settings_account" method="post" action="{{ secure_url('/user/settings/account') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<a id="change-username" href="#change-username" class="anchor">#</a>
		<h4 class="anchor">Change username</h4>
		<div>
			<input type="text" name="username" required placeholder="new username">
			<aside>
				<p>If you wish to change your username, you may do so here. Please note that you can only change your username a limited number of times.</p>
			</aside>
		</div>

		<hr>
		<br>
		<br>

		<a id="change-email-address" href="#change-email-address" class="anchor">#</a>
		<h4 class="anchor">Change email address</h4>
		<div>
			<input type="email" name="email" required placeholder="new email">
			<aside>
				<p>If you've lost access to the current email account or would like to use a different one, you can change the address here.</p>
			</aside>
		</div>
		<div>
			<input type="email" name="email-confirm" required placeholder="confirm email">
			<aside>

			</aside>
		</div>

		<hr>
		<br>
		<br>

		<a id="update-password" href="#update-password" class="anchor">#</a>
		<h4 class="anchor">Update password</h4>
		<div>
			<input type="password" name="password-current" required placeholder="current password">
			<aside>
				<p>For security reasons, please enter your current password so that we can verify if it's you. If you have forgotten your password, you can <a href="/auth/reset">reset your password</a>.</p>
			</aside>
		</div>
		<div>
			<input type="password" name="password" required placeholder="new password">
			<aside>

			</aside>
		</div>
		<div>
			<input type="password" name="password-confirm" required placeholder="confirm password">
			<aside>

			</aside>
		</div>

		<input type="submit" value="change settings">

	</form>
@stop
