<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCompanyProfileRequest;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function updateProfile(UpdateCompanyProfileRequest $request)
    {
        auth()->user()->update($request->validated());
        CompanyService::update($request, auth()->user()->company);

        toastr()->success(trans('keywords.profile updated successfully'));
        return back();
    }
}
