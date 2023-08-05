<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAdminProfileRequest;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('admin.profile.index', compact("user"));
    }
    public function updateProfile(UpdateAdminProfileRequest $request)
    {
        $data = $request->validated();

        if ($data['password'] != null)
            $data['password'] = Hash::make($data['password']);
        else
            unset($data['password']);

        $user =  auth()->user();
        $user->update($data);
        AdminService::update($request, $user->admin);

        toastr()->success(trans('keywords.profile updated successfully'));

        return back();
    }
}
