<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOfficeProfileRequest;
use App\Services\LandlordService;
use App\Services\OfficeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OfficeController extends Controller
{
    public function updateProfile(UpdateOfficeProfileRequest $request)
    {

        $data = $request->validated();

        if ($data['password'] != null)
            $data['password'] = Hash::make($data['password']);
        else
            unset($data['password']);

        $user =  auth()->user();
        $user->update($data);
        OfficeService::update($request, $user->office);

        toastr()->success(trans('keywords.profile updated successfully'));
        return back();
    }
}
