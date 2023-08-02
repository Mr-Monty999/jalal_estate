<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLandOfferRequest;
use App\Http\Requests\UpdateLandOfferRequest;
use App\Models\City;
use App\Models\LandOffer;
use App\Models\LandType;
use App\Services\LandOfferService;

class LandOfferController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:view_offers")->only(["index", "show"]);
        $this->middleware("can:edit_offers")->only(["edit", "update"]);
        $this->middleware("can:create_offers")->only(["create", "store"]);
        $this->middleware("can:delete_offers")->only(["destroy"]);
        $this->middleware("can:accept_offers")->only(["accept"]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy("name")->get();
        $landTypes = LandType::orderBy("name")->get();
        $landOffers = LandOffer::with("city.neighbourhoods", "neighbourhood", "landTypes")
            ->whereNull("accepted_by")
            ->latest()
            ->paginate(10);
        return view("user.offers.index", compact("cities", "landTypes", "landOffers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLandOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandOfferRequest $request)
    {

        $landOffer = LandOfferService::store($request);

        toastr()->success(trans('keywords.Offer Added Successfully'));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandOffer  $landOffer
     * @return \Illuminate\Http\Response
     */
    public function show(LandOffer $landOffer)
    {
        abort(403);
    }

    public function accept(LandOffer $landOffer)
    {

        $landOffer->update([
            "accepted_by" => auth()->id()
        ]);

        toastr()->success(trans('keywords.offer accepted successfully'));
        return back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandOffer  $landOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(LandOffer $landOffer)
    {
        $cities = City::orderBy("name")->get();
        $landTypes = LandType::orderBy("name")->get();
        return view("user.offers.edit", compact("cities", "landTypes", "landOffer"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandOfferRequest  $request
     * @param  \App\Models\LandOffer  $landOffer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandOfferRequest $request, LandOffer $landOffer)
    {
        if ($landOffer->user_id != auth()->id())
            abort(403);

        LandOfferService::update($request, $landOffer);

        toastr()->success(trans('keywords.updated successfully'));
        return redirect()->route("user.home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandOffer  $landOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandOffer $landOffer)
    {
        if ($landOffer->user_id != auth()->id())
            abort(403);

        $landOffer->delete();

        toastr()->success(trans('keywords.deleted successfully'));
        return back();
    }
}
