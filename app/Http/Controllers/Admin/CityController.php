<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:view_cities")->only(["index", "show"]);
        $this->middleware("can:edit_cities")->only(["edit", "update"]);
        $this->middleware("can:create_cities")->only(["create", "store"]);
        $this->middleware("can:delete_cities")->only(["destroy"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy("name")->paginate(10);

        return view("admin.cities.index", compact("cities"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cities = City::whereNull("parent_id")->orderBy("name", "asc")->get();
        return view("admin.cities.create", compact("cities"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $data  = $request->validated();

        if (!$request->parent_id || !City::where("id", $request->parent_id)->exists())
            unset($data["parent_id"]);

        $city = City::create($data);

        toastr()->success(trans('keywords.Added Successfully'));

        return redirect()->route("admin.cities.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $cities = City::whereNull("parent_id")->where("id", "!=", $city->id)->orderBy("name", "asc")->get();

        return view("admin.cities.edit", compact("city", "cities"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCityRequest  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityRequest $request, City $city)
    {

        $data  = $request->validated();

        if (!$request->parent_id || !City::where("id", $request->parent_id)->exists())
            unset($data["parent_id"]);

        $city->update($data);

        toastr()->success('keywords.Updated Successfully');

        return redirect()->route("admin.cities.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        return response()->json();
    }
}
