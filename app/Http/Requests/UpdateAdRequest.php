<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdRequest extends FormRequest
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
            "company_name" => "required|string",
            "company_logo" => "nullable|image|mimes:jpeg,png,jpg,gif",
            "description" => "nullable|string",
            "cities_ids" => "nullable|array"

        ];
    }
}
