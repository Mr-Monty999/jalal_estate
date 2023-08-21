<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuctionBidRequest;
use App\Http\Requests\UpdateAuctionBidRequest;
use App\Models\Auction;
use App\Models\AuctionBid;
use App\Services\AuctionBidService;

class AuctionBidController extends Controller
{

    public function store(StoreAuctionBidRequest $request, Auction $auction)
    {
        if ($auction->user_id == auth()->id())
            abort(403);

        if ($auction->status == "end") {
            toastr()->error(trans("keywords.this auction has ended"));
            return back();
        }

        $latestBid =  AuctionBid::where("auction_id", $auction->id)->latest()->first();

        if ($latestBid) {
            if ($latestBid->user->id == auth()->id()) {
                toastr()->error(trans("keywords.you are the last bidder") . "!");
                return back();
            }
            if ($latestBid->price >= $request->price) {
                toastr()->error(trans("keywords.lowest bid amount is currently over") . " " . number_format($latestBid->price));
                return back();
            }
        }

        if ($auction->price >= $request->price) {
            toastr()->error(trans("keywords.lowest bid amount is currently over") . " " . number_format($auction->price));
            return back();
        }



        AuctionBidService::store($request, $auction);

        toastr()->success(trans("keywords.your bid added successfully"));
        return back();
    }
}
