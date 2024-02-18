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

    public static function getColumnValue($user, $companyColumn, $officeColumn, $marketerColumn, $landlordColumn, $adminColumn, $serviceProviderColumn)
    {
        if ($user->hasRole('marketer')) {
            return $user->marketer->$marketerColumn;
        } elseif ($user->hasRole('office')) {
            return $user->office->$officeColumn;
        } elseif ($user->hasRole('admin')) {
            return $user->admin->$adminColumn;
        } elseif ($user->hasRole('landlord')) {
            return $user->landlord->$landlordColumn;
        } elseif ($user->hasRole('service-provider')) {
            return $user->serviceProvider->$serviceProviderColumn;
        } elseif ($user->hasRole('comapny')) {
            return $user->company->$companyColumn;
        }

        return null;
    }

    public static function getUserCities($user, $order = "asc")
    {
        if ($user->hasRole('marketer'))
            return $user->marketer->cities()->orderBy('name', $order)->get();
        elseif ($user->hasRole('company'))
            return $user->company->cities()->orderBy('name', $order)->get();
        elseif ($user->hasRole('office'))
            return $user->office->cities()->orderBy('name', $order)->get();
        else
            return null;
    }
    public static function cityExists($user, $cityId)
    {
        if ($user->hasRole('marketer'))
            return $user->marketer->cities()->where("city_id", $cityId)->exists();
        elseif ($user->hasRole('company'))
            return $user->company->cities()->where("city_id", $cityId)->exists();
        elseif ($user->hasRole('office'))
            return $user->office->cities()->where("city_id", $cityId)->exists();

        else
            return false;
    }
}
