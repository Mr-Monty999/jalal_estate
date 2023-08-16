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

        $time = time();
        if ($request->image1) {
            $name = $time . "-" . $request->image1->getClientOriginalName();
            $path = $request->image1->storeAs("images/rents", $name, "public");

            Image::create([
                "path" => $path,
                "key" => "image1",
                "imageable_type" => Rent::class,
                "imageable_id" => $rent->id,
            ]);
        }
        if ($request->image2) {
            $name = $time . "-" . $request->image2->getClientOriginalName();
            $path = $request->image2->storeAs("images/rents", $name, "public");

            Image::create([
                "path" => $path,
                "key" => "image2",
                "imageable_type" => Rent::class,
                "imageable_id" => $rent->id,
            ]);
        }
        if ($request->image3) {
            $name = $time . "-" . $request->image3->getClientOriginalName();
            $path = $request->image3->storeAs("images/rents", $name, "public");

            Image::create([
                "path" => $path,
                "key" => "image3",
                "imageable_type" => Rent::class,
                "imageable_id" => $rent->id,
            ]);
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

        $time = time();

        if ($request->image1) {
            $name = $time . "-" . $request->image1->getClientOriginalName();
            $path = $request->image1->storeAs("images/rents", $name, "public");

            $existsImage = Image::where([
                "imageable_type" => Rent::class,
                "imageable_id" => $rent->id,
                "key" => "image1"
            ]);

            if ($existsImage->exists()) {
                Storage::disk("public")->delete($existsImage->first()->path);
                $existsImage->update([
                    "path" => $path,
                    "imageable_type" => Rent::class,
                    "imageable_id" => $rent->id,
                ]);
            } else
                Image::create([
                    "path" => $path,
                    "key" => "image1",
                    "imageable_type" => Rent::class,
                    "imageable_id" => $rent->id,
                ]);
        }
        if ($request->image2) {
            $name = $time . "-" . $request->image2->getClientOriginalName();
            $path = $request->image2->storeAs("images/rents", $name, "public");

            $existsImage = Image::where([
                "imageable_type" => Rent::class,
                "imageable_id" => $rent->id,
                "key" => "image2"
            ]);

            if ($existsImage->exists()) {
                Storage::disk("public")->delete($existsImage->first()->path);
                $existsImage->update([
                    "path" => $path,
                ]);
            } else
                Image::create([
                    "path" => $path,
                    "key" => "image2",
                    "imageable_type" => Rent::class,
                    "imageable_id" => $rent->id,
                ]);
        }
        if ($request->image3) {
            $name = $time . "-" . $request->image3->getClientOriginalName();
            $path = $request->image3->storeAs("images/rents", $name, "public");

            $existsImage = Image::where([
                "imageable_type" => Rent::class,
                "imageable_id" => $rent->id,
                "key" => "image3"
            ]);

            if ($existsImage->exists()) {
                Storage::disk("public")->delete($existsImage->first()->path);
                $existsImage->update([
                    "path" => $path,
                ]);
            } else
                Image::create([
                    "path" => $path,
                    "key" => "image3",
                    "imageable_type" => Rent::class,
                    "imageable_id" => $rent->id,
                ]);
        }

        // if ($request->images) {
        //     foreach ($request->images as $key => $image) {
        //         $name = time() . "-" . $image->getClientOriginalName();
        //         $path = $image->storeAs("images/rents", $name, "public");

        //         $existsImage = Image::where([
        //             "imageable_type" => Rent::class,
        //             "imageable_id" => $rent->id,
        //             "key" => $key
        //         ]);

        //         if ($existsImage->exists()) {
        //             Storage::disk("public")->delete($existsImage->first()->path);
        //             $existsImage->update([
        //                 "path" => $path,
        //                 "imageable_type" => Rent::class,
        //                 "imageable_id" => $rent->id,
        //             ]);
        //         } else
        //             Image::create([
        //                 "path" => $path,
        //                 "imageable_type" => Rent::class,
        //                 "imageable_id" => $rent->id,
        //             ]);
        //     }
        // }

        return $rent;
    }
}
