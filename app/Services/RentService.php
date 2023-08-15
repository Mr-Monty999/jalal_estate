<?php

namespace App\Services;

use App\Models\Rent;

/**
 * Class RentService.
 */
class RentService
{

    public static function store($request)
    {
        $data = $request->validated();
        // $data["user_id"] = auth()->id();

        if ($request->hasFile("banner")) {
            $name = time() . "-" . $request->file("banner")->getClientOriginalName();
            $data["banner"] = $request->file("banner")->storeAs("images/rents", $name, "public");

            // if ($company->photo)
            //     Storage::disk("public")->delete($company->photo);
        }

        $rent = Rent::create($data);

        return $rent;
    }
}
