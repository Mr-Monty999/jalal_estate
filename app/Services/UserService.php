<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserService.
 */
class UserService
{

    public static function store($request)
    {
        $data = $request->validated();


        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);

        return $user;
    }
}
