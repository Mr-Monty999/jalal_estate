<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

/**
 * Class AdminService.
 */
class AdminService
{

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


        return $admin;
    }
}
