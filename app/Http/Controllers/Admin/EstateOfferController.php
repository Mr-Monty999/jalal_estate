<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LandOffer;
use Illuminate\Http\Request;

class EstateOfferController extends Controller
{
    public function index(Request $request)
    {


        $search = $request->search;

        $user = auth()->user();

        $estateOffers = LandOffer::with([
            "city.neighbourhoods" => function ($query) {
                $query->orderBy("name");
            },
            "neighbourhood",
            "landTypes"
        ])
            ->withTrashed()
            ->search($search, null, true, true)
            ->latest()
            ->paginate(10);


        $user = auth()->user();



        return view("admin.estate-offers.index", compact("estateOffers", "user"));
    }
}
