<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

/**
 * Class AdminService.
 */
class AdminService
{

    public static function store($request)
    {
        $data = $request->validated();

        $data["is_active"] = 1;
        $data["password"] = Hash::make($request->password);
        $user = User::create($data);

        $data["user_id"] = $user->id;

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/admins", $name, "public");
        }
        $admin = Admin::create($data);


        $admin->user->syncRoles([$request->role_name]);



        return $admin;
    }
    public static function update($request, $admin)
    {
        $data = $request->validated();
        $user = $admin->user;

        if ($request->password && $request->password != null)
            $data["password"] = Hash::make($request->password);
        else
            unset($data["password"]);


        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/admins", $name, "public");

            if ($admin->photo)
                Storage::disk("public")->delete($admin->photo);
        }

        $user->update($data);
        $admin->update($data);


        $admin->user->syncRoles([$request->role_name]);




        return $admin;
    }
    public static function updateProfile($request, $admin)
    {
        $data = $request->validated();

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/admins", $name, "public");

            if ($admin->photo)
                Storage::disk("public")->delete($admin->photo);
        }
        $admin->update($data);


        return $admin;
    }
}
