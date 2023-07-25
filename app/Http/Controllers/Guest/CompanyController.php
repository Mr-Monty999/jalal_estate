<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCompany;
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
        return view("guest.auth.companies-register");
    }


    public function register(RegisterCompany $request)
    {
        DB::transaction(
            function () use ($request) {

                $user = UserService::store($request);
                $company = CompanyService::store($request, $user->id);
                RoleService::assignCompanyRole($user);

                Auth::login($user, true);
            }
        );

        return redirect()->route("user.home");
    }
}
