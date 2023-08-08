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

    public static function loadAds($count)
    {

        if (!session()->has("current_ad"))
            session()->put("current_ad", 1);

        $currentAd = session()->get("current_ad");

        // return $currentAd;s


        $adsCount = Ad::count();

        $ads = Ad::get()->shuffle();

        // $ads->shuffle();
        // shuffle($ads);
        // unset($ads[$currentAd]);
        // $ads = array_values($ads);

        // return $adsCount % $currentAd;

        // if ($adsCount > $count)

        //     $ads = $ads->get();


        session()->put("current_ad", $currentAd + 1);
        return $ads;
    }
}