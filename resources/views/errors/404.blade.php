<?php
	$error = [
		'error_id' => "404",
		'error_name' => "Not found",
		'error_desc' => "The file you requested could not be found.",
		'page_title' => "error 404"
	]
?>

@include('error', $error)