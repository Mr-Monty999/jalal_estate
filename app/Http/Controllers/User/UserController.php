<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route("user.login");
    }

    public function getNotifications()
    {

        $user = Auth::user();
        $user->unreadNotifications->markAsRead();
        $notifications = $user->notifications()->paginate(20);


        return view("user.notificaitions.index", compact("notifications"));
    }
}
