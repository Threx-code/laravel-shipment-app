<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingFormRequest extends FormRequest
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
            "country" => ['bail', 'required'],
            'trans_mode' => ['bail', 'required'],
            'kilo_weight' => ['bail', 'required'],
            "email" => ['bail', 'required', 'email:rfc,strict,filter'],
        ];
    }

    public function messages()
    {
        return [
            "country.required" => "Please Country is required",
            "trans_mode.required" => "Please Transaction Mode is  required",
            "kilo_weight.required" => "Please Item Kilogram Weight is required",
            "email.required" => "Please email is required",
            "email.email" => "Please enter a valid email address"
        ];
    }
}
