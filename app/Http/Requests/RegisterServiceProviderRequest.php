<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterServiceProviderRequest extends FormRequest
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
            "password" => "required|string",
            "password_confirmation" => "required|same:password",
            "birthdate" => "nullable|date",
            "logo" => "nullable|image",
            "terms_and_conditions" => "required|string"

        ];
    }
}
