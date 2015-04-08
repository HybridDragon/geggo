<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignUp extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if($this->auth->guest())
		{
			return true;
		}

		else
		{
			return false;
		}
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => 'required',
			'email' => 'required',
			'password' => 'required',
			'password_confirm' => 'required'
		];
	}

}
