<!DOCTYPE html>
<html>
	<head>
		<title>{{ $page_title }} | {{ Config::get('app.name') }}</title>

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

		<header class="page" id="page-header">
			<aside id="page-header-content" class="container">
				<h1 id="page-title">{{ $page_title }}</h1>
			</aside>
		</header>

		
		<section id="content">
			<main id="content-container" class="container">
				<article>
					@yield('content')
				</article>
				
				<aside id="sidebar">
					<ul>
						<li>
							<a href="#">Section 1</a>
						</li>
						<li>
							<a href="#">Section 2</a>
						</li>
						<li>
							<a href="#">Section 3</a>
						</li>
						<li>
							<a href="#">Section 4</a>
						</li>
					</ul>
				</aside>
			</main>

			
		</section>


		@section('javascript')
			<script src="{{ Config::get('app.assets_url') }}/js/jquery.min.js" async></script>
		@show
	</body>
</html>
