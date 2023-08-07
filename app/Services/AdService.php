<?php

namespace App\Services;

use App\Models\Ad;
use Storage;

/**
 * Class AdService.
 */
class AdService
{

    public static function store($request)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();

        if ($request->hasFile("company_logo")) {
            $name = time() . "-" . $request->file("company_logo")->getClientOriginalName();
            $data["company_logo"] = $request->file("company_logo")->storeAs("images/ads", $name, "public");

            // if ($company->company_logo)
            //     Storage::disk("public")->delete($company->company_logo);
        }

        $ad = Ad::create($data);

        return $ad;
    }


    public static function update($request, $ad)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();

        if ($request->hasFile("company_logo")) {
            $name = time() . "-" . $request->file("company_logo")->getClientOriginalName();
            $data["company_logo"] = $request->file("company_logo")->storeAs("images/ads", $name, "public");

            if ($ad->company_logo)
                Storage::disk("public")->delete($ad->company_logo);
        }

        $ad->update($data);

        return $ad;
    }
}
