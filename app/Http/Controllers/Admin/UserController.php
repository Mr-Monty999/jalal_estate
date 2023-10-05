<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserBlockRequest;
use App\Models\User;
use App\Models\UserBlock;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:view_settings");
    }
    public function all(Request $request)
    {

        $search = $request->search;

        $users = User::latest()
            ->search($search, null, true, true)
            ->paginate(10);

        return view("admin.users.all", compact("users"));
    }
    public function allActive(Request $request)
    {

        $search = $request->search;
        $users = User::latest()
            ->where("is_active", 1)
            ->search($search, null, true, true)
            ->paginate(10);

        return view("admin.users.active", compact("users"));
    }
    public function allUnActive(Request $request)
    {

        $search = $request->search;
        $users = User::latest()
            ->where("is_active", 0)
            ->search($search, null, true, true)
            ->paginate(10);

        return view("admin.users.unactive", compact("users"));
    }

    public function allBlocked(Request $request)
    {


        $search = $request->search;

        $users = User::latest()
            ->with([
                "blocks" => function ($q) {
                    $q->where("expired_at", ">", now());
                }
            ])
            ->whereHas("blocks", function ($q) {
                $q->where("expired_at", ">", now())
                    ->where("status", "block");
            })
            ->search($search, null, true, true)
            ->paginate(10);

        return view("admin.users.blocked", compact("users"));
    }

    public function block(StoreUserBlockRequest $request)
    {
        $data = $request->validated();

        if ($request->period_type == "minute")
            $data["expired_at"] = Carbon::now()->addMinutes($request->period);
        elseif ($request->period_type == "day")
            $data["expired_at"] = Carbon::now()->addDays($request->period);

        UserBlock::create($data);

        toastr()->success(trans("keywords.blocked successfully"));

        return back();
    }
    public function unblock(User $user)
    {

        $user->blocks()->latest()->update([
            "status" => "unblock"
        ]);

        toastr()->success(trans("keywords.unblocked successfully"));

        return back();
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
