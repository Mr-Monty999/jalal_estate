<?php

namespace App\Services;

use App\Models\Landlord;
use Illuminate\Support\Facades\Storage;

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

    public static function update($request, $landlord)
    {
        $data = $request->validated();

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/landlords", $name, "public");

            if ($landlord->photo)
                Storage::disk("public")->delete($landlord->photo);
        }
        $landlord->update($data);


        return $landlord;
    }
}
