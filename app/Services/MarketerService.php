<?php

namespace App\Services;

use App\Models\Marketer;

/**
 * Class MarketerService.
 */
class MarketerService
{

    public static function store($request, $userId)
    {
        $data = $request->validated();
        $data["user_id"] = $userId;

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/marketers", $name, "public");

            // if ($marketer->photo)
            //     Storage::disk("public")->delete($marketer->photo);
        }
        $marketer = Marketer::create($data);


        return $marketer;
    }
}
