<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCompany extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "phone" => "required|numeric|unique:users,phone",
            "license_number" => "required|numeric|unique:companies,license_number|unique:marketers,license_number|unique:offices,license_number",
            "advertiser_number" => "required|numeric|unique:companies,advertiser_number|unique:marketers,advertiser_number|unique:offices,advertiser_number",
            "commercial_registration_number" => "required|numeric|unique:companies,commercial_registration_number|unique:offices,commercial_registration_number",
            "password" => "required|string",
            "password_confirmation" => "required|same:password",
            "logo" => "nullable|image",
            "city_id" => "required|exists:cities,id",
            "neighbourhood_id" => "required|exists:neighbourhoods,id",
            "terms_and_conditions" => "required|string"
        ];
    }
}
