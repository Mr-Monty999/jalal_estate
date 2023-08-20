<?php

namespace App\Services;

use App\Models\Auction;
use Storage;

/**
 * Class AuctionService.
 */
class AuctionService
{
    public static function store($request)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();

        if ($request->hasFile("video")) {
            $name = time() . "-" . $request->file("video")->getClientOriginalName();
            $data["video"] = $request->file("video")->storeAs("videos/auctions", $name, "public");

            // if ($auction->video)
            //     Storage::disk("public")->delete($auction->video);
        }

        $auction = Auction::create($data);

        // if ($request->cities_ids)
        //     $auction->cities()->attach($request->cities_ids);

        return $auction;
    }


    public static function update($request, $auction)
    {
        $data = $request->validated();
        // $data["user_id"] = auth()->id();

        if ($request->hasFile("video")) {
            $name = time() . "-" . $request->file("video")->getClientOriginalName();
            $data["video"] = $request->file("video")->storeAs("videos/auctions", $name, "public");

            if ($auction->video)
                Storage::disk("public")->delete($auction->video);
        }

        $auction->update($data);
        // $auction->cities()->sync($request->cities_ids);

        return $auction;
    }
}
