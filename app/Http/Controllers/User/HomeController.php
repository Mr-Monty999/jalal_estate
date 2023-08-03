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

        if (auth()->user()->hasAnyRole(["landlord", "service-provider"]))
            return redirect()->route("user.profile");



        return redirect()->route("user.land-offers.index");
    }
}
