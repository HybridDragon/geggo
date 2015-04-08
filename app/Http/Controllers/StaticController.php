<?php namespace App\Http\Controllers;

class StaticController extends Controller {
	public function about()
	{
		return view('static.about', ['page_title' => "about"]);
	}

	public function features()
	{
		return view('static.features', ['page_title' => "features"]);
	}
}
