<?php

namespace App\Services;

use App\Models\Office;

/**
 * Class OfficeService.
 */
class OfficeService
{

    public static function store($request, $userId)
    {
        $data = $request->validated();
        $data["user_id"] = $userId;

        if ($request->hasFile("logo")) {
            $name = time() . "-" . $request->file("logo")->getClientOriginalName();
            $data["logo"] = $request->file("logo")->storeAs("images/offices", $name, "public");

            // if ($office->logo)
            //     Storage::disk("public")->delete($office->logo);
        }
        $office = Office::create($data);


        return $office;
    }
}
