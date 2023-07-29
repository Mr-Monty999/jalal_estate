<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterOfficeRequest;
use App\Models\City;
use App\Services\OfficeService;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfficeController extends Controller
{
    public function index()
    {
        $cities = City::orderBy("name")->get();
        return view("guest.auth.offices-register", compact("cities"));
    }


    public function register(RegisterOfficeRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = UserService::store($request);
            $office = OfficeService::store($request, $user->id);
            RoleService::assignOfficeRole($user);
            $office->cities()->attach(
                $request->city_id,
                [
                    "created_at" => now(),
                    "updated_at" => now()
                ]
            );
            $office->neighbourhoods()->attach(
                $request->neighbourhood_id,
                [
                    "created_at" => now(),
                    "updated_at" => now()
                ]
            );

            Auth::login($user, true);
        });

        toastr()->success(trans('keywords.Account Created Successfully'));
        return redirect()->route("user.home");
    }
}
