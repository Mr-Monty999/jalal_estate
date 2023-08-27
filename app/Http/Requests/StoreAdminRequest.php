<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
            "name" => "nullable|string",
            "password" => "required|string",
            "password_confirmation" => "required|string|same:password",
            "photo" => "nullable|image|max:10240",
            "email" => "required|email",
            "phone" => "nullable|string",
            "role_name" => "required|exists:roles,name"
        ];
    }
}
