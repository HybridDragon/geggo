<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticController extends Controller {
	public function about()
	{
		return view('static.about', [
			'page_title' => "about", 
			'page_desc' => "well hello there."
		]);
	}

	public function features()
	{
		return view('static.features', [
			'page_title' => "features"
		]);
	}
}
