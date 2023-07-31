<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\LandOffer;
use App\Models\LandType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $cities = City::orderBy("name")->get();
        $landTypes = LandType::orderBy("name")->get();
        $landOffers = LandOffer::with("city", "neighbourhood", "landTypes")->latest()->paginate(10);
        return view("user.home.index", compact("cities", "landTypes", "landOffers"));
    }
}
