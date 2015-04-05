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
			<a href="/features">features</a>
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
						<a href="/user/dashboard">dashboard</a>
					</li>
					<li>
						<a href="/user/settings">settings</a>
					</li>
				@else
					<li>
						<a href="/auth/login">login</a>
					</li>
					<li>
						<a href="/auth/signup">signup</a>
					</li>
				@endif
			</ul>
		</li>
	</ul>
</nav>