<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuctionBidRequest;
use App\Http\Requests\UpdateAuctionBidRequest;
use App\Models\AuctionBid;

class AuctionBidController extends Controller
{

    public function store(StoreAuctionBidRequest $request)
    {
        AuctionBid::store($request);

        toastr()->success(trans("keywords.your bid added successfully"));
        return back();
    }
}
