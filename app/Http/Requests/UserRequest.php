<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' =>  'required',
            'role_id' => 'required'
        ];
    }

    public function messages(){
        return [

            'firstname.required' => 'Firstname field is required',
            'lastname.required' => 'Lastname field is required',
            'email.required' => 'Email field is required',
            'email.unique' => 'This email is already registered',
            'password.required' => 'Password field is  required',
            'role_id.required' => 'Role field is required',

        ];
    }
}
