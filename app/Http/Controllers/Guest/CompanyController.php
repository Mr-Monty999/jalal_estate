<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCompany;
use App\Models\City;
use App\Services\CompanyService;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index()
    {
        $cities = City::orderBy("name")->get();
        return view("guest.auth.companies-register", compact("cities"));
    }


    public function register(RegisterCompany $request)
    {
        DB::transaction(
            function () use ($request) {

                $user = UserService::store($request);
                $company = CompanyService::store($request, $user->id);
                RoleService::assignCompanyRole($user);
                $company->cities()->attach(
                    $request->city_id,
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
