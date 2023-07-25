<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCompany;
use App\Http\Requests\RegisterMarketerRequest;
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
        return view("guest.auth.marketers-register");
    }


    public function register(RegisterMarketerRequest $request)
    {

        DB::transaction(
            function () use ($request) {

                $user = UserService::store($request);
                $marketer = MarketerService::store($request, $user->id);
                RoleService::assignMarketerRole($user);

                Auth::login($user, true);
            }
        );


        return redirect()->route("user.home");
    }
}
