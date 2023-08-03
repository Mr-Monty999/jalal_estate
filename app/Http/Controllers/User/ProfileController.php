<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCompanyProfileRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasRole("company"))
            return view("user.profile.companies.index");
        elseif (auth()->user()->hasRole("office"))
            return view("user.profile.offices.index");
        elseif (auth()->user()->hasRole("marketer"))
            return view("user.profile.marketers.index");
        elseif (auth()->user()->hasRole("landlord"))
            return view("user.profile.landlords.index");
        elseif (auth()->user()->hasRole("service-provider"))
            return view("user.profile.service-providers.index");


        return abort(404);
    }
}
