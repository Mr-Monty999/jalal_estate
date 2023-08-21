<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuctionRequest extends FormRequest
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
            "price" => "required|numeric",
            "city_id" => "required|exists:cities,id",
            "neighbourhood_id" => "required|exists:neighbourhoods,id",
            "street" => "required|string",
            "space" => "required|numeric",
            "north_border" => "required|string",
            "south_border" => "required|string",
            "east_border" => "required|string",
            "west_border" => "required|string",
            "estate_classification_id" => "required|exists:estate_classifications,id",
            "land_type_id" => "required|exists:land_types,id",
            "features" => "nullable|string",
            "description" => "nullable|string",
            "video" => "nullable|mimes:mp4,ogx,oga,ogv,ogg,webm,avi,flv,mov,mpeg",
            "instrument_number" => "required|numeric|unique:auctions,instrument_number",
            "images" => "nullable|array"



        ];
    }
}
