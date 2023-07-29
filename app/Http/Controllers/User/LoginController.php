<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view("user.auth.login");
    }
    public function login(Request $request)
    {
        $request->merge(["is_active" => true]);

        if (Auth::attempt($request->only("email", "password", "is_active"))) {
            toastr()->success(trans('keywords.Logged In Successfully'));
            return redirect()->route("user.home");
        }

        return back()->withErrors(trans("auth.failed"));
    }
}
