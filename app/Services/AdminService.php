<?php

namespace App\Services;

use App\Models\Admin;
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

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/admins", $name, "public");
        }
        $admin = Admin::create($data);

        $role = Role::firstOrCreate([
            "name" => $request->role_name
        ]);


        if ($request->permissions_ids)
            $role->syncPermissions($request->permissions_ids);

        $admin->user->assignRole($request->role_name);



        return $admin;
    }
    public static function update($request, $admin)
    {
        $data = $request->validated();

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/admins", $name, "public");

            if ($admin->photo)
                Storage::disk("public")->delete($admin->photo);
        }
        $admin->update($data);


        $role = Role::firstOrCreate([
            "name" => $request->role_name
        ]);


        if ($request->permissions_ids)
            $role->syncPermissions($request->permissions_ids);

        $admin->user->assignRole($request->role_name);



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
