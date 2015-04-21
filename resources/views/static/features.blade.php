@extends('layouts.main')

@section('sidebar')
	<ul>
		<li>
			<a href="#ideas">Ideas</a>
		</li>
		<li>
			<a href="#planned-implementation">Planned implementation</a>
		</li>
		<li>
			<a href="#semi-implemented">Semi-implemented</a>
		</li>
		<li>
			<a href="#fully-implemented">Fully implemented</a>
		</li>
	</ul>
	<br>
	<hr>
	<br>
	@include("static.sidebar")
	@parent
@stop

@section('content')
	<a id="ideas" href="#ideas" class="anchor">#</a>
	<h2 class="anchor">Ideas</h2>
	<hr>
	<p>Features that could exist but have no plan for implementation.</p>
	<ol>
		<li>No censorship</li>
		<li>WebDAV support</li>
	</ol>
	<br>

	<br>
	<a id="planned-implementation" href="#planned-implementation" class="anchor">#</a>
	<h2 class="anchor">Planned implementation</h2>
	<hr>
	<p>Features that are queued for implementation.</p>
	<ol>
		<li>Two factor auth</li>
		<li>Anonymous sharing</li>
		<li>File editing
			<ul>
				<li>(Re)naming</li>
			</ul>
		</li>
		<li>Private files
			<ul>
				<li>Share with selected users</li>
				<li>Unlisted sharing via link</li>
				<li>File access PIN/passwords</li>
			</ul>
		</li>
		<li>File expiry</li>
		<li>Unlimited public files</li>
	</ol>
	<br>


	<br>
	<a id="semi-implemented" href="#semi-implemented" class="anchor">#</a>
	<h2 class="anchor">Semi-implemented</h2>
	<hr>
	<p>Features that are in a semi-implemented or buggy state.</p>
	<ol>
		<li>User accounts</li>
	</ol>
	<br>


	<br>
	<a id="fully-implemented" href="#fully-implemented" class="anchor">#</a>
	<h2 class="anchor">Fully implemented</h2>
	<hr>
	<p>Features that are fully implemented and work with little to no bugs.</p>
	<ol>
		<li>Basic theming</li>
	</ol>
@stop
