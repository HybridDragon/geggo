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
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => [
				'required',
				'min: 2',
				'max: 16',
				'alpha_dash',
				'not_in: admin'
			],
			'email' => [
				'required',
				'max: 254',
				'email'
			],
			'password' => [
				'required',
				'min: 6',
				'max: 50',
				'confirmed'
			],
		];
	}

}
