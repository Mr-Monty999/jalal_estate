<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterOfficeRequest;
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
        return view("guest.auth.office-register");
    }


    public function register(RegisterOfficeRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = UserService::store($request);
            $office = OfficeService::store($request, $user->id);
            RoleService::assignOfficeRole($user);

            Auth::login($user, true);
        });

        return redirect()->route("user.home");
    }
}
