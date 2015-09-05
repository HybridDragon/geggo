<!DOCTYPE html>
<html>
	<head>
		<title>
			@if(!empty($page_title))
				{{ $page_title }} |
			@endif
			{{ Config::get('app.name') }}
		</title>

		@include('layouts.sections.meta')

		@section('stylesheets')
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/main.css">
			<link rel="stylesheet" href="{{ Config::get('app.assets_url') }}/css/fonts.css">
		@show
	</head>
	<body>
		@include('layouts.sections.menu')

		<section id="content" class="container">
			<main id="content-container">
				<article>
					<header class="page" id="page-header">
						<h1 id="page-title">{{ $page_title }}</h1>
						@if(!empty($page_desc))
							<h2 id="page-desc">{{ $page_desc }}</h1>
						@endif
					</header>

					@yield('content')
				</article>
				<aside id="sidebar">
					@section('sidebar')
						<ul>
							<li>
								<a href="{{ Request::url() }}">Global page 1</a>
							</li>
							<li>
								<a href="#">Global page 2</a>
							</li>
							<li>
								<a href="#">Global page 3</a>
							</li>
							<li>
								<a href="#">Global page 4</a>
							</li>
						</ul>
					@show
				</aside>
			</main>
		</section>

		@include('layouts.sections.footer')

		@section('javascript')
			<script src="{{ Config::get('app.assets_url') }}/js/jquery.min.js" async></script>
			<!--
			<script src="{{ Config::get('app.assets_url') }}/js/pjax.jquery.js" async></script>

			<script>
				$(function() {
					$.pjax.defaults.timeout = 1200
					$(document).pjax('a', '#content');
				})
			</script>
			-->
		@show
	</body>
</html>
