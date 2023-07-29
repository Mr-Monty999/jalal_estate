<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCompany;
use App\Http\Requests\RegisterMarketerRequest;
use App\Models\City;
use App\Services\CompanyService;
use App\Services\MarketerService;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MarketerController extends Controller
{
    public function index()
    {
        $cities = City::orderBy("name")->get();
        return view("guest.auth.marketers-register", compact("cities"));
    }


    public function register(RegisterMarketerRequest $request)
    {

        DB::transaction(
            function () use ($request) {

                $user = UserService::store($request);
                $marketer = MarketerService::store($request, $user->id);
                RoleService::assignMarketerRole($user);
                $marketer->cities()->attach(
                    $request->city_id,
                    [
                        "created_at" => now(),
                        "updated_at" => now()
                    ]
                );
                $marketer->neighbourhoods()->attach(
                    $request->neighbourhood_id,
                    [
                        "created_at" => now(),
                        "updated_at" => now()
                    ]
                );

                Auth::login($user, true);
            }
        );


        return redirect()->route("user.home");
    }
}
