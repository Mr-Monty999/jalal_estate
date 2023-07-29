<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Neighbourhood;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getNeighbourhoods($cityId)
    {

        $neighbourhoods = Neighbourhood::where('city_id', $cityId)->orderBy("name")->get();

        return response()->json($neighbourhoods);
    }
}
