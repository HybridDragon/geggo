<!DOCTYPE html>
<html>
	<head>
		<title>{{ $page_title }} | {{ Config::get('app.name') }}</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="fast and easy file sharing for people that don't have time to eject a flash drive safely.">

		@section('stylesheets')
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/main.css">
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/front.css">
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/fonts.css">
		@show
	</head>
	<body>
		@include('layouts.sections.menu')

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
					@section('sidebar')
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
					@show
				</aside>
			</main>

			
		</section>


		@section('javascript')
			<script src="{{ Config::get('app.assets_url') }}/js/jquery.min.js" async></script>
		@show
	</body>
</html>
