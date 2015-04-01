<!DOCTYPE html>
<html>
	<head>
		<title>{{ Config::get('app.name') }}</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=640px, initial-scale=1">
		<meta name="description" content="fast and easy file sharing for people that don't have time to eject a flash drive safely.">

		@section('stylesheets')
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/main.css">
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/front.css">
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/fonts.css">
		@show
	</head>
	<body>
		<nav id="main-menu" class="fixed-menu">
			<ul class="container">
				<li>
					<a href="/">
						<h1 id="main-menu-logo">{{ Config::get('app.name') }}</h1>
					</a>
				</li>
				<li>
					<a href="/browse">browse</a>
				</li>
				<li>
					<a href="/about">about</a>
				</li>
				<li>
					<a href="#">feedback</a>
				</li>
				<li>
					<a href="#">privacy</a>
				</li>
				<li>
					<ul id="user-submenu">
						@if(Auth::check())
							<li>
								<a href="#">dashboard</a>
							</li>
							<li>
								<a href="#">settings</a>
							</li>
						@else
							<li>
								<a href="/user/login">login</a>
							</li>
							<li>
								<a href="/user/signup">signup</a>
							</li>
						@endif
					</ul>
				</li>
			</ul>
		</nav>

		<header class="page" id="front-spash">
			<main id="front-spash-content">
				@yield('splash-content')
			</main>
		</header>

		@yield('content')
		
		@section('javascript')
			<script src="{{ Config::get('app.assets_url') }}/js/jquery.min.js" async></script>
		@show
	</body>
</html>
