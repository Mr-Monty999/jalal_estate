<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterServiceProviderRequest;
use App\Http\Requests\StoreServiceProviderRequest;
use App\Http\Requests\UpdateServiceProviderRequest;
use App\Models\ServiceProvider;
use App\Services\RoleService;
use App\Services\ServiceProviderService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceProviderController extends Controller
{
    public function index()
    {
        return view("guest.auth.service-providers-register");
    }


    public function register(RegisterServiceProviderRequest $request)
    {

        DB::transaction(
            function () use ($request) {

                $user = UserService::store($request);
                $serviceProviders = ServiceProviderService::store($request, $user->id);
                RoleService::assignServiceProviderRole($user);

                Auth::login($user, true);
            }
        );


        return redirect()->route("user.home");
    }
}
