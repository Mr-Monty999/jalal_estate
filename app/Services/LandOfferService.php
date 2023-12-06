<?php

namespace App\Services;

use App\Models\LandOffer;
use Illuminate\Support\Facades\Storage;

/**
 * Class LandOfferService.
 */
class LandOfferService
{

    public static function store($request)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();

        $data['order'] = self::generateOfferOrder($data['instrument_number']);

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

    protected static function generateOfferOrder($instrument_number) {
        $count = LandOffer::whereInstrumentNumber($instrument_number)
            ->count();

        return $count + 1;

    }


    public static function update($request, $landOffer)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();

        if ($request->hasFile("image")) {
            $name = time() . "-" . $request->file("image")->getClientOriginalName();
            $data["image"] = $request->file("image")->storeAs("images/land-offers", $name, "public");

            if ($landOffer->image)
                Storage::disk("public")->delete($landOffer->image);
        }

        $landOffer->update($data);
        $landOffer->landTypes()->sync($data["land_type_ids"]);

        return $landOffer;
    }
}
