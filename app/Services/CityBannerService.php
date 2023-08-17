<?php

namespace App\Services;

use App\Models\CityBanner;
use Storage;

/**
 * Class CityBannerService.
 */
class CityBannerService
{

    public static function store($request)
    {
        $data = $request->validated();


        if ($request->hasFile("banner")) {
            $name = time() . "-" . $request->file("banner")->getClientOriginalName();
            $data["banner"] = $request->file("banner")->storeAs("images/city-banners", $name, "public");

            // if ($company->banner)
            //     Storage::disk("public")->delete($company->banner);
        }

        $cityBanner = CityBanner::create($data);

        if ($request->cities_ids)
            $cityBanner->cities()->attach($request->cities_ids);

        return $cityBanner;
    }


    public static function update($request, $cityBanner)
    {
        $data = $request->validated();



        if ($request->hasFile("banner")) {
            $name = time() . "-" . $request->file("banner")->getClientOriginalName();
            $data["banner"] = $request->file("banner")->storeAs("images/city-banners", $name, "public");

            if ($cityBanner->banner)
                Storage::disk("public")->delete($cityBanner->banner);
        }

        $cityBanner->update($data);

        $cityBanner->cities()->sync($request->cities_ids);

        return $cityBanner;
    }
}
