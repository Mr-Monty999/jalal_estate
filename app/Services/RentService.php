<?php

namespace App\Services;

use App\Models\Image;
use App\Models\Rent;
use Storage;

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


        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $name = time() . "-" . $image->getClientOriginalName();
                $path = $image->storeAs("images/rents", $name, "public");

                Image::create([
                    "path" => $path,
                    "imageable_type" => Rent::class,
                    "imageable_id" => $rent->id,
                ]);
            }
        }

        return $rent;
    }

    public static function update($request, $rent)
    {
        $data = $request->validated();
        // $data["user_id"] = auth()->id();

        if ($request->hasFile("banner")) {
            $name = time() . "-" . $request->file("banner")->getClientOriginalName();
            $data["banner"] = $request->file("banner")->storeAs("images/rents", $name, "public");

            if ($rent->banner)
                Storage::disk("public")->delete($rent->banner);
        }

        $rent->update($data);


        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $name = time() . "-" . $image->getClientOriginalName();
                $path = $image->storeAs("images/rents", $name, "public");

                Image::create([
                    "path" => $path,
                    "imageable_type" => Rent::class,
                    "imageable_id" => $rent->id,
                ]);
            }
        }

        return $rent;
    }
}
