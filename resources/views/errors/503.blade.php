<?php
	$error = [
		'error_id' => "503",
		'error_name' => "Service Unavailable",
		'error_desc' => "The server is temporarily unavailable, try again soon.",
		'page_title' => "error 503"
	]
?>

@include('error', $error)