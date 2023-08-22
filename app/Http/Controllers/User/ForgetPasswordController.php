<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Password;
use Str;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view("user.auth.forget-password");
    }

    public function postForgetPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? view("user.auth.reset-password-link-sent")
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword($token)
    {
        return view('user.auth.reset-password', ['token' => $token]);
    }

    public function postResetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        $status = Password::reset(
            $request->only("email", 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            toastr()->success(__($status));
            return redirect()->route('user.login');
        } {
            return back()->withErrors(['email' => [__($status)]]);
        }
    }
}
