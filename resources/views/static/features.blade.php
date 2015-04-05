@extends('layouts.main')

@section('content')
	<p>Here is a list of features that will be available and their implementation progress.</p>
	<br>
	<h3>To do:</h3>
	<ol>
		<li>No censorship</li>
		<li>Anonymous sharing</li>
		<li>Private files
			<ul>
				<li>Share with selected users</li>
				<li>Unlisted sharing via link</li>
				<li>File access PIN/passwords</li>
			</ul>
		</li>
		<li>User accounts</li>
		<li>File editing
			<ul>
				<li>(Re)naming</li>
				<li>Visiblility</li>
			</ul>
		</li>
		<li>File expiry</li>
		<li>Two factor auth</li>
		<li>WebDAV support</li>
		<li>Unlimited public files</li>
	</ol>
@stop