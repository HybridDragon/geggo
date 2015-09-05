<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BaseController extends Controller {
	public function welcome()
	{
		return view('welcome');
	}

	public function paste()
	{
		return view('paste', ['page_title' => "paste"]);
	}

	public function errors($error_id)
	{
		$error_name = [
			'400' => "Bad request",
			'401' => "Unauthorized",
			'403' => "Forbidden",
			'404' => "Not found",
			'405' => "Method not allowed",
			'408' => "Request timeout",
			'418' => "I'm a teapot"
		];

		$error_desc = [
			'400' => "Something broke on your end.",
			'401' => "You may have to log in to view this.",
			'403' => "You're not authorized to view this.",
			'404' => "The file you requested could not be found.",
			'405' => "You're not allowed to use that method here.",
			'408' => "The request took too long to complete, try again soon.",
			'418' => "I'm a little teapot, short and stout, here is my handle, here is my spout. When I get all steamed up, hear me shout \"Tip me over and pour me out!\"."
		];

		$error = [
			'error_id' => $error_id,
			'error_name' => $error_name[$error_id],
			'error_desc' => $error_desc[$error_id],
			'page_title' => "error {$error_id}"
		];

		return view('error', $error);
	}
}
