<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCompanyProfileRequest;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function updateProfile(UpdateCompanyProfileRequest $request)
    {
        $data = $request->validated();

        if (isset($data['password']))
            $data['password'] = Hash::make($data['password']);

        $user =  auth()->user();
        $user->update($data);

        CompanyService::update($request, $user->company);

        toastr()->success(trans('keywords.profile updated successfully'));
        return back();
    }
}
