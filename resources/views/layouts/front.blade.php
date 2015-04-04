<!DOCTYPE html>
<html>
	<head>
		<title>{{ Config::get('app.name') }}</title>

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
