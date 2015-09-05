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
		<li>
			<a href="#libraries">Libraries utilised (or to be)</a>
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
		<li>WebDAV support</li>
	</ol>
	<br>

	<br>
	<a id="planned-implementation" href="#planned-implementation" class="anchor">#</a>
	<h2 class="anchor">Planned implementation</h2>
	<hr>
	<p>Features that are queued for implementation.</p>
	<ol>
        <li>File collections/groups</li>
		<li>Two factor auth</li>
		<li>Private key auth</li>
		<li>Transparent file encryption</li>
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
		<li>Command line tool</li>
	</ol>
	<br>


	<br>
	<a id="semi-implemented" href="#semi-implemented" class="anchor">#</a>
	<h2 class="anchor">Semi-implemented</h2>
	<hr>
	<p>Features that are in a semi-implemented or buggy state.</p>
	<ol>
		<li>User accounts</li>
		<li>Site design</li>
	</ol>
	<br>


	<br>
	<a id="fully-implemented" href="#fully-implemented" class="anchor">#</a>
	<h2 class="anchor">Fully implemented</h2>
	<hr>
	<p>Features that are fully implemented and work with little to no bugs.</p>
	<ol>
		<li>Basic upload functionality</li>
	</ol>
	<br>


	<br>
	<a id="libraries" href="#libraries" class="anchor">#</a>
	<h2 class="anchor">Libraries utilised (or to be)</h2>
	<hr>
	<p>Libraries that are used (or soon to be) to power the site.</p>
	<ol>
		<li>
			<h4>
				<a href="https://github.com/callmecavs/layzr.js">callmecavs/layzr.js</a>
			</h4>
			<p>Lazy loading, because speed.</p>
		</li>
		<li>
			<h4>
				<a href="https://github.com/defunkt/jquery-pjax">defunkt/jquery-pjax</a>
			</h4>
			<p>Ajax page loading, because moar speed.</p>
		</li>
		<li>
			<h4>
				<a href="https://github.com/t4t5/sweetalert">t4t5/sweetalert</a>
			</h4>
			<p>Makes Javascript alerts pretty, who doesn't like pretty stuff?</p>
		</li>
		<li>
			<h4>
				<a href="https://github.com/blueimp/jQuery-File-Upload">blueimp/jQuery-File-Upload</a>
			</h4>
			<p>We can't be bothered reinventing the wheel, so we use this for uploads!</p>
		</li>
		<li>
			<h4>
				<a href="https://github.com/isagalaev/highlight.js">isagalaev/highlight.js</a>
			</h4>
			<p>Allows easy and simple code highlighting, again to make out lives easier.</p>
		</li>
	</ol>
	<br>
@stop
