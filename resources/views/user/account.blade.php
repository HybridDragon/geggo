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
			<input type="text" name="username" placeholder="new username" value="{{ $username }}">
			<aside>
				<p>If you wish to change your username, you may do so here. Please note that you can only change your username a limited number of times.</p>
			</aside>
		</div>

		<hr>

		<a id="change-email-address" href="#change-email-address" class="anchor">#</a>
		<h4 class="anchor">Change email address</h4>
		<div>
			<input type="email" name="email" placeholder="new email">
			<aside>
				<p>If you've lost access to the current email account or would like to use a different one, you can change the address here.</p>
			</aside>
		</div>
		<div>
			<input type="email" name="email-confirm" placeholder="confirm email">
			<aside>

			</aside>
		</div>

		<hr>

		<a id="update-password" href="#update-password" class="anchor">#</a>
		<h4 class="anchor">Update password</h4>
		<div>
			<input type="password" name="password" placeholder="new password">
			<aside>
				<p>Want to change you password to something else, sure thing!</p>
			</aside>
		</div>
		<div>
			<input type="password" name="password-confirm"placeholder="confirm password">
			<aside>

			</aside>
		</div>

		<div style="display: inline-block; float: left;">
			<button type="button" style="display: inline-block" onclick="history.back();">cancel</button>
			<button type="reset" style="display: inline-block">reset</button>
		</div>

		<div style="display: inline-block; float: right;">
			<input type="password" name="password-current" required placeholder="current password" style="display: inline-block">
			<button type="submit" style="display: inline-block">change settings</button>
		</div>
	</form>
@stop
