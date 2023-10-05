<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserBlockRequest extends FormRequest
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
            "period" => "required|numeric|min:1",
            "period_type" => "required|string|in:minute,day",
            "user_id" => "required|exists:users,id",
            "reason" => "nullable|string"
        ];
    }
}
