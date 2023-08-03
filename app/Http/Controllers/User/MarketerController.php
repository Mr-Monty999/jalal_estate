<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMarketerProfileRequest;
use App\Services\MarketerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MarketerController extends Controller
{
    public function updateProfile(UpdateMarketerProfileRequest $request)
    {

        $data = $request->validated();

        if (isset($data['password']))
            $data['password'] = Hash::make($data['password']);

        $user = auth()->user();
        $user->update($data);
        MarketerService::update($request, $user->marketer);

        toastr()->success(trans('keywords.profile updated successfully'));
        return back();
    }
}
