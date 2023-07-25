<?php

namespace App\Services;

use App\Models\Landlord;

/**
 * Class LandlordService.
 */
class LandlordService
{

    public static function store($request, $userId)
    {
        $data = $request->validated();
        $data["user_id"] = $userId;

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/landlords", $name, "public");

            // if ($landlord->photo)
            //     Storage::disk("public")->delete($landlord->photo);
        }
        $landlord = Landlord::create($data);


        return $landlord;
    }
}
