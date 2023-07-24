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
        // return $request->all();
        if (Auth::attempt($request->only("email", "password")))
            return redirect()->route("user.home");

        return back()->withErrors(trans("auth.failed"));
    }
}
