<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function getIndex()
	{
		//$this->middleware('AuthRequired');
		return redirect("/user/dashboard");
	}

	public function getDashboard()
	{
		return view('user.dashboard', ['page_title' => "dashboard"]);
	}

	public function getPreferences()
	{
		return view('user.preferences', ['page_title' => "preferences"]);
	}

	public function getSettings()
	{
		return view('user.settings', ['page_title' => "settings"]);
	}

	public function getAccount()
	{
		return view('user.account', ['page_title' => "account"]);
	}
}
