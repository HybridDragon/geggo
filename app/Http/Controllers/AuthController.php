<?php namespace App\Http\Controllers;

class AuthController extends Controller {
	public function signup()
	{
		return view('auth.signup', ['page_title' => "signup"]);
	}

	public function login()
	{
		return view('auth.login', ['page_title' => "log in"]);
	}
}
