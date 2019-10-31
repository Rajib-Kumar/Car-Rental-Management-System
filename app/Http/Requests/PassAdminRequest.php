<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassAdminRequest extends FormRequest
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
            'password' => "required|digits_between:4,8|alpha_num",
            'confirmPassword' => 'required|same:password'
        ];
    }
}
