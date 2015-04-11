<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;

class AuthController extends Controller {
	public function __construct()
	{
		$this->middleware('guest');
	}

	public function getSignup()
	{
		return view('auth.signup', ['page_title' => "signup"]);
	}

	public function postSignup(SignUp $signup)
	{
		//$signup_data = [
		//	'page_title' => "signup",
		//	'username' => $_POST['username'],
		//	'email' => $_POST['email'],
		//	'password' => $_POST['password'],
		//	'password_confirm' => $_POST['password-confirm'],
		//];

		return view('auth.signup', $signup_data);
	}

	public function getLogin()
	{
		return view('auth.login', ['page_title' => "log in"]);
	}

	public function postLogin(LogIn $login)
	{
		//$login_data = [
		//	'page_title' => "log in",
		//	'username' => $_POST['username'],
		//	'password' => $_POST['password'],
		//];

		return view('auth.login', $login_data);
	}
}
