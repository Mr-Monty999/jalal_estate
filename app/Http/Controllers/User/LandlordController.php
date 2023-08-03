<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateLandlordProfileRequest;
use App\Services\LandlordService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LandlordController extends Controller
{
    public function updateProfile(UpdateLandlordProfileRequest $request)
    {

        $data = $request->validated();

        if (isset($data['password']))
            $data['password'] = Hash::make($data['password']);

        $user =  auth()->user();
        $user->update($data);
        LandlordService::update($request, $user->landlord);

        toastr()->success(trans('keywords.profile updated successfully'));
        return back();
    }
}
