<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\SignUp;
use App\Http\Requests\LogIn;

use App\User;

use Auth;

class AuthController extends Controller {
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getLogout']]);
        $this->middleware('auth', ['only' => ['getLogout']]);
    }

    public function getSignup()
    {
        return view('auth.signup', ['page_title' => "signup"]);
    }

    public function postSignup(SignUp $signup)
    {
        $signup_data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        $user = new User;
        $user->id = hash("crc32", $_POST['username']);
        $user->username = $_POST['username'];
        $user->email = $_POST['email'];
        $user->password = bcrypt($_POST['password']);

        $storage_path = storage_path();
        mkdir($storage_path."/uploads/".$user->id);
        chmod($storage_path."/uploads/".$user->id, 0755);

        if($user->save())
        {
            Auth::attempt($signup_data, 1);
            return redirect('user/dashboard');
        }
    }

    public function getLogin()
    {
        return view('auth.login', ['page_title' => "log in"]);
    }

    public function postLogin(LogIn $login)
    {
        $login_data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        if(Auth::attempt($login_data, 1))
        {
            return redirect()->intended('user/dashboard');
        }

        else
        {
            return "Login failed.";
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
