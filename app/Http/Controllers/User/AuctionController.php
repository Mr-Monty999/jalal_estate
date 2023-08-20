<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuctionRequest;
use App\Http\Requests\UpdateAuctionRequest;
use App\Models\Auction;
use App\Models\City;
use App\Models\EstateClassification;
use App\Models\LandType;
use App\Services\AuctionService;

class AuctionController extends Controller
{

    public function __construct()
    {
        $this->middleware("can:view_auctions")->only(["index", "show"]);
        $this->middleware("can:edit_auctions")->only(["edit", "update"]);
        $this->middleware("can:create_auctions")->only(["create", "store"]);
        $this->middleware("can:delete_auctions")->only(["destroy"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $auctions = Auction::latest()->paginate(10);

        return view("user.auctions.index", compact("auctions", "user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $cities = City::with("neighbourhoods")->orderBy("name")->get();
        $estateClassifications = EstateClassification::orderBy("name")->get();
        $landTypes = LandType::orderBy("name")->get();



        return view("user.auctions.create", compact("user", "cities", "estateClassifications", "landTypes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuctionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuctionRequest $request)
    {
        AuctionService::store($request);

        toastr()->success(trans("keywords.Added Successfully"));

        return redirect()->route("user.auctions.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {

        $user = auth()->user();
        $cities = City::with("neighbourhoods")->orderBy("name")->get();
        $estateClassifications = EstateClassification::orderBy("name")->get();
        $landTypes = LandType::orderBy("name")->get();



        return view("user.auctions.edit", compact("auction", "user", "cities", "estateClassifications", "landTypes"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuctionRequest  $request
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuctionRequest $request, Auction $auction)
    {

        AuctionService::update($request, $auction);

        toastr()->success(trans("keywords.updated successfully"));

        return redirect()->route("user.auctions.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        $auction->delete();


        toastr()->success(trans("keywords.deleted successfully"));

        return back();
    }
}
