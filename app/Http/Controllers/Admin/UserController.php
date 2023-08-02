<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(Request $request)
    {

        $users = User::latest()->paginate(10);

        return view("admin.users.all", compact("users"));
    }
    public function allActive(Request $request)
    {

        $users = User::latest()
            ->where("is_active", 1)
            ->paginate(10);

        return view("admin.users.active", compact("users"));
    }
    public function allUnActive(Request $request)
    {

        $users = User::latest()
            ->where("is_active", 0)
            ->paginate(10);

        return view("admin.users.unactive", compact("users"));
    }

    public function active(Request $request, User $user)
    {
        $user->is_active = 1;
        $user->save();
        return  redirect()->back()->with("success", trans("keywords.user activated successfully"));
    }

    public function deactive(Request $request, User $user)
    {
        $user->is_active = 0;
        $user->save();
        return  redirect()->back()->with("success", trans("keywords.user deactivated successfully"));
    }
}
