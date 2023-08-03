<?php

namespace App\Services;

use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Storage;

/**
 * Class ServiceProviderService.
 */
class ServiceProviderService
{
    public static function store($request, $userId)
    {
        $data = $request->validated();
        $data["user_id"] = $userId;

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/service-providers", $name, "public");

            // if ($serviceProvider->photo)
            //     Storage::disk("public")->delete($serviceProvider->photo);
        }
        $serviceProvider = ServiceProvider::create($data);


        return $serviceProvider;
    }

    public static function update($request, $serviceProvider)
    {
        $data = $request->validated();

        if ($request->hasFile("photo")) {
            $name = time() . "-" . $request->file("photo")->getClientOriginalName();
            $data["photo"] = $request->file("photo")->storeAs("images/service-providers", $name, "public");

            if ($serviceProvider->photo)
                Storage::disk("public")->delete($serviceProvider->photo);
        }
        $serviceProvider->update($data);


        return $serviceProvider;
    }
}
