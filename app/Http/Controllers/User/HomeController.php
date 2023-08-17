<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\CityBanner;
use App\Models\LandOffer;
use App\Models\LandType;
use App\Services\UserService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        if (auth()->user()->hasAnyRole(["landlord", "service-provider"]))
            return redirect()->route("user.profile");



        // return redirect()->route("user.land-offers.index");

        $user = auth()->user();
        $userCities = UserService::getUserCities($user);

        $cityBanner = $userCities->first()->banners()->latest()->firstOrNew();

        return view("user.home.index", compact("cityBanner", "user"));
    }
}
