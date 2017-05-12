<?php namespace employeeAdmin\Http\Requests;

use employeeAdmin\Http\Requests\Request;

class CreateEmployeeRequest extends Request {

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
			'documentId'	=> 'required|max:10|unique:employee,documentId|regex:/[V,E,P]{1}[-][0-9]{7,8}/',
			'fullName' 		=> 'required|max:100',
			'address'		=> 'required',
			'email'			=> 'email',
			'phone'			=> 'min:12|max:12|regex:/[0-9]{4}[-][0-9]{7}/',
			'contractDate'	=> 'required|date_format:Y-m-d',
			'birthDate'		=> 'date_format:Y-m-d',
			'isFreelance'	=> 'required',
			'hourlyRate'	=> 'required_if:isFreelance,Y|numeric',
		];
	}

}
