<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdRequest;
use App\Http\Requests\UpdateAdRequest;
use App\Models\Ad;
use App\Models\City;
use App\Services\AdService;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:view_ads")->only(["index", "show"]);
        $this->middleware("can:edit_ads")->only(["edit", "update"]);
        $this->middleware("can:create_ads")->only(["create", "store"]);
        $this->middleware("can:delete_ads")->only(["destroy"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads  = Ad::with("cities")->latest()->paginate(10);
        return view("admin.ads.index", compact("ads"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::orderBy("name")->get();

        return view("admin.ads.create", compact("cities"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdRequest $request)
    {
        AdService::store($request);

        toastr()->success(trans("keywords.Added Successfully"));
        return redirect()->route("admin.ads.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        $cities = City::orderBy("name")->get();
        $adCities = $ad->cities()->pluck("city_id")->toArray();


        return view("admin.ads.edit", compact("ad", "cities", "adCities"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdRequest  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdRequest $request, Ad $ad)
    {
        AdService::update($request, $ad);

        toastr()->success(trans("keywords.Updated Successfully"));
        return redirect()->route("admin.ads.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();


        return response()->json();
    }
}
