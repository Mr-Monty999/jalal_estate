<?php

namespace App\Services;

use App\Models\AuctionBid;

/**
 * Class AuctionBidService.
 */
class AuctionBidService
{
    public static function store($request, $auction)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();
        $data["auction_id"] = $auction->id;


        $auction = AuctionBid::create($data);

        return $auction;
    }
}
