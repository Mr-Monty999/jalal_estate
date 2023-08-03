<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateServiceProviderRequest;
use App\Services\ServiceProviderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceProviderController extends Controller
{
    public function updateProfile(UpdateServiceProviderRequest $request)
    {


        $data = $request->validated();

        if ($data['password'] != null)
            $data['password'] = Hash::make($data['password']);
        else
            unset($data['password']);

        $user = auth()->user();
        $user->update($data);
        ServiceProviderService::update($request, $user->serviceProvider);

        toastr()->success(trans('keywords.profile updated successfully'));
        return back();
    }
}
