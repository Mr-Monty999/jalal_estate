<?php

namespace App\Services;

use App\Models\AuctionBid;

/**
 * Class AuctionBidService.
 */
class AuctionBidService
{
    public static function store($request)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();


        $auction = AuctionBid::create($data);

        return $auction;
    }
}
