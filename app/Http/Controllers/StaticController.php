<?php namespace App\Http\Controllers;

class StaticController extends Controller {
	public function about()
	{
		$data = [
			'page_title' => "about"
		]; 

		return view('static.about', $data);
	}
}
