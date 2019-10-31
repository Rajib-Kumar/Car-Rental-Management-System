<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookingRequest extends FormRequest
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
            'rentalType' => "required",
            'packageType' => "required",
            'vehicleType' => "required",
            'price' => "required",
            'StartDateTime' => "required",
            'EndDateTime' => "required", 
            'StartLocation' => "required",
            'ReturnLocation' => "required",
            'packageId' => "required",
            'bookingStatus' => "required",
            'payingstatus' => 'required'
        ];
    }
}
