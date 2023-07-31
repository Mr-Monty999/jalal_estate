<?php

namespace App\Services;

use App\Models\LandOffer;

/**
 * Class LandOfferService.
 */
class LandOfferService
{

    public static function store($request)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();

        if ($request->hasFile("image")) {
            $name = time() . "-" . $request->file("image")->getClientOriginalName();
            $data["image"] = $request->file("image")->storeAs("images/land-offers", $name, "public");

            // if ($company->image)
            //     Storage::disk("public")->delete($company->image);
        }

        $landOffer = LandOffer::create($data);
        $landOffer->landTypes()->attach($data["land_type_ids"]);

        return $landOffer;
    }
}
