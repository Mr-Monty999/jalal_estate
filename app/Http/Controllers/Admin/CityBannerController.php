<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityBannerRequest;
use App\Http\Requests\UpdateCityBannerRequest;
use App\Models\City;
use App\Models\CityBanner;
use App\Services\CityBannerService;
use Illuminate\Http\Request;
use Storage;

class CityBannerController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:view_cities_banners")->only(["index", "show"]);
        $this->middleware("can:edit_cities_banners")->only(["edit", "update"]);
        $this->middleware("can:create_cities_banners")->only(["create", "store"]);
        $this->middleware("can:delete_cities_banners")->only(["destroy"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = auth()->user();
        $citiesBanners = CityBanner::latest()->paginate(10);
        return view("admin.cities-banners.index", compact("citiesBanners", "user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $cities = City::orderBy("name")->get();

        return view("admin.cities-banners.create", compact("user", "cities"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityBannerRequest $request)
    {
        CityBannerService::store($request);

        toastr()->success(trans("keywords.Added Successfully"));

        return redirect()->route("admin.cities-banners.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cityBanner = CityBanner::findOrFail($id);

        $cityBanner->load("cities");
        $cities = City::orderBy("name")->get();
        $bannerCities = $cityBanner->cities()->pluck("city_id")->toArray();

        return view("admin.cities-banners.edit", compact("cityBanner", "bannerCities", "cities"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityBannerRequest $request, CityBanner $cityBanner)
    {
        CityBannerService::update($request, $cityBanner);

        toastr()->success(trans("keywords.updated successfully"));

        return redirect()->route("admin.cities-banners.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cityBanner = CityBanner::findOrFail($id);
        $cityBanner->cities()->detach();

        $cityBanner->delete();

        if ($cityBanner->banner)
            Storage::disk("public")->delete($cityBanner->banner);

        toastr()->success(trans("keywords.deleted successfully"));
        return response()->json();
    }
}
