<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterLandlordRequest;
use App\Services\LandlordService;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LandlordController extends Controller
{

    public function index()
    {
        return view("guest.auth.landlord-register");
    }


    public function register(RegisterLandlordRequest $request)
    {

        DB::transaction(
            function () use ($request) {

                $user = UserService::store($request);
                $landlord = LandlordService::store($request, $user->id);
                RoleService::assignLandlordRole($user);

                Auth::login($user, true);
            }
        );


        return redirect()->route("user.home");
    }
}
