<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            "terms_and_conditions" => "nullable|string",
            "about_page_title" => "nullable|string",
            "about_page_image" => "nullable|image",
            "about_page_description" => "nullable|string",
            "contact_page_title" => "nullable|string",
            "contact_page_image" => "nullable|image",
            "contact_page_description" => "nullable|string",
            "footer_facebook_link" => "nullable|string",
            "footer_instagram_link" => "nullable|string",
            "footer_twitter_link" => "nullable|string",
            "footer_linkedin_link" => "nullable|string",
        ];
    }
}
