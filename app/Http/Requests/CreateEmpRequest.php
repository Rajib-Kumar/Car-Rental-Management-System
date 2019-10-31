<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateEmpRequest extends FormRequest
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
            'empName' => "unique:employee,empName|regex: /[a-zA-Z]/",
            'firstName' => "required|regex: /[a-zA-Z]/",
            'lastName' => "required|regex: /[a-zA-Z]/",
            'email' => "required|email|unique:employee,email",
            'phone' => "required|digits:11|regex:/(01)[0-9]{9}/",
            'address' => "required", 
            'dob' => "required|date",
            'city' => "required",
            'sex' => "required",
            'password' => "required|digits_between:4,8|alpha_num",
            'confirmPassword' => "required|same:password",
            'photo' => "required",  
            'photoId' => 'required'
        ];
    }
}
