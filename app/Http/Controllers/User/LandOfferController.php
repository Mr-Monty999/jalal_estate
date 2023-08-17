<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLandOfferRequest;
use App\Http\Requests\UpdateLandOfferRequest;
use App\Models\Ad;
use App\Models\City;
use App\Models\EstateClassification;
use App\Models\LandOffer;
use App\Models\LandType;
use App\Notifications\LandOfferAcceptedNotification;
use App\Services\AdService;
use App\Services\EncryptionService;
use App\Services\LandOfferService;
use App\Services\UserService;
use Illuminate\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Musonza\Chat\Facades\ChatFacade;

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


        $user = auth()->user();

        $cities = UserService::getUserCities($user, "desc");

        $landTypes = LandType::orderBy("name")->get();
        $estateClassifications = EstateClassification::orderBy("name")->get();
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

        if ($request->estate_classification_id)
            $landOffers->whereIn("estate_classification_id", $request->estate_classification_id);


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


        $user = auth()->user();

        $ads = AdService::loadAds(5);

        // return $ads;


        return view("user.offers.index", compact("cities", "landTypes", "landOffers", "user", "ads", "estateClassifications"));
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

        $user = auth()->user();

        $cities = UserService::getUserCities($user, "desc");
        if (!UserService::cityExists($user, $request->city_id))
            abort(403);

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
        $landOffer->load("acceptedBy", "city", "neighbourhood", "landTypes", "estateClassification");
        return view("user.offers.show", compact("landOffer"));
    }

    public function accept(LandOffer $landOffer)
    {

        session()->put("print_offer_id", $landOffer->id);
        $user = auth()->user();

        $participants = [$landOffer->user, $user];

        $conversation = ChatFacade::conversations()->between($landOffer->user, $user);

        if (!$conversation)
            $conversation = ChatFacade::makeDirect()->createConversation($participants);

        $message = ChatFacade::message("السلام عليكم لقد قبلتُ عرضك")
            ->from($user)
            ->to($conversation)
            ->send();

        session()->put("consversation_id", $conversation->id);

        $landOffer->update([
            "accepted_by" => auth()->id()
        ]);
        $landOffer->user->notify(new LandOfferAcceptedNotification($landOffer));


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
        $user = auth()->user();

        $cities = UserService::getUserCities($user, "desc");

        $landTypes = LandType::orderBy("name")->get();
        $estateClassifications = EstateClassification::orderBy("name")->get();

        return view("user.offers.edit", compact("cities", "landTypes", "landOffer", "estateClassifications"));
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
        $user = auth()->user();

        if ($landOffer->user_id != $user->id)
            abort(403);

        $cities = UserService::getUserCities($user, "desc");
        if (!UserService::cityExists($user, $request->city_id))
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

    public function print(LandOffer $landOffer)
    {

        $user = auth()->user();
        if ($landOffer->accepted_by != $user->id && $landOffer->user_id != $user->id)
            abort(403);

        session()->remove("print_offer_id");

        return view("user.offers.print", compact("landOffer", "user"));
    }
}
