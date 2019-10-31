<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'firstName' => "required|regex: /[a-zA-Z]/",
            'lastName' => "required|regex: /[a-zA-Z]/",
            'email' => "required|email",
            'phone' => "required|digits:11|regex:/(01)[0-9]{9}/",
            'address' => "required", 
            'division' => "required",
            'city' => 'required'
        ];
    }
}
