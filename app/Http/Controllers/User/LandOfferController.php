<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLandOfferRequest;
use App\Http\Requests\UpdateLandOfferRequest;
use App\Models\City;
use App\Models\LandOffer;
use App\Models\LandType;
use App\Services\EncryptionService;
use App\Services\LandOfferService;
use Illuminate\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
    public function index(Request $request)
    {



        $cities = City::orderBy("name")->get();
        $landTypes = LandType::orderBy("name")->get();
        $landOffers = LandOffer::with([
            "city.neighbourhoods" => function ($query) {
                $query->orderBy("name");
            },
            "neighbourhood",
            "landTypes"
        ])
            ->whereNull("accepted_by");

        if ($request->city_id)
            $landOffers->where("city_id", $request->city_id);

        if ($request->neighbourhood_id)
            $landOffers->whereIn("neighbourhood_id", $request->neighbourhood_id);

        if ($request->commercial_or_housing)
            $landOffers->whereIn("commercial_or_housing", $request->commercial_or_housing);

        if ($request->land_type_ids)
            $landOffers->whereHas("landTypes", function ($query) use ($request) {
                $query->whereIn("type_id", $request->land_type_ids);
            });


        if ($request->min_price)
            $landOffers->where("price", ">=", $request->min_price);


        if ($request->max_price)
            $landOffers->where("price", "<=", $request->max_price);

        if ($request->min_space)
            $landOffers->where("space", ">=", $request->min_space);


        if ($request->max_space)
            $landOffers->where("space", "<=", $request->max_space);



        $landOffers =
            $landOffers->latest()
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
