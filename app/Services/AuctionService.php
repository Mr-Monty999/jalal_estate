<?php

namespace App\Services;

use App\Models\Auction;
use App\Models\AuctionBid;
use App\Models\Image;
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
        }


        $auction = Auction::create($data);

        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $name = time() . "-" . $image->getClientOriginalName();
                $data["image"] = $image->storeAs("images/auctions", $name, "public");
                Image::create([
                    "path" => $data["image"],
                    "imageable_type" => Auction::class,
                    "imageable_id" => $auction->id
                ]);
            }
        }

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

        if ($request->images) {
            $oldImages = Image::where("imageable_type", Auction::class)
                ->where("imageable_id", $auction->id);



            foreach ($oldImages->pluck("path")->toArray() as $key => $image) {
                Storage::disk("public")->delete($image);
            }

            $oldImages->delete();


            foreach ($request->images as $key => $image) {
                $name = time() . "-" . $image->getClientOriginalName();
                $data["image"] = $image->storeAs("images/auctions", $name, "public");
                Image::create([
                    "path" => $data["image"],
                    "imageable_type" => Auction::class,
                    "imageable_id" => $auction->id
                ]);
            }
        }
        // $auction->cities()->sync($request->cities_ids);

        return $auction;
    }


    public static function lowestBidPrice($auction)
    {
        $latestBid =  AuctionBid::where("auction_id", $auction->id)->latest()->firstOrNew();
        $price = $auction->price;

        if ($auction)
            $price = $latestBid->price;

        return $price;
    }

    public static function participantsCount($auction)
    {
        $count =  AuctionBid::where("auction_id", $auction->id)
            ->distinct()
            ->count("user_id");


        return $count;
    }
}
