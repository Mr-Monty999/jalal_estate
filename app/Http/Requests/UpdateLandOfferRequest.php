<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLandOfferRequest extends FormRequest
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
            "city_id" => "required|numeric|exists:cities,id",
            "neighbourhood_id" => "required|numeric|exists:neighbourhoods,id",
            "street_name" => "required|string",
            "commercial_or_housing" => "required|string|in:commercial,housing",
            "direction" => "required|string",
            "space" => "required|string",
            "is_commercial" => "required_if:commercial_or_housing,housing|string",
            "street_height" => "required|string",
            "dept" => "required|string",
            "street_width" => "required|string",
            "land_number" => "required|numeric",
            "instrument_number" => "required|numeric",
            "operation_type" => "required|string|in:sell,rent",
            "rent_period" => "required_if:operation_type,rent",
            "price" => "required|numeric",
            "adjective" => "required|string",
            "contact_info" => "required|string",
            "type2" => "required|string|in:piece,block,,block_header",
            "land_type_ids" => "required|array|exists:land_types,id",
            "image" => "nullable|image",
            "type3" => "required|string|in:corner,one_street",
            "streets_count" => "required|numeric",
            "schema_number" => "required|numeric"


        ];
    }
}
