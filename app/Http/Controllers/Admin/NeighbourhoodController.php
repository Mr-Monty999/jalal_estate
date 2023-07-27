<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNeighbourhoodRequest;
use App\Http\Requests\UpdateNeighbourhoodRequest;
use App\Models\City;
use App\Models\Neighbourhood;

class NeighbourhoodController extends Controller
{

    public function __construct()
    {
        $this->middleware("can:view_neighbourhoods")->only(["index", "show"]);
        $this->middleware("can:edit_neighbourhoods")->only(["edit", "update"]);
        $this->middleware("can:create_neighbourhoods")->only(["create", "store"]);
        $this->middleware("can:delete_neighbourhoods")->only(["destroy"]);
    }

    public function index()
    {
        $neighbourhoods = Neighbourhood::with("city")->orderBy("name")->paginate(10);

        return view("admin.neighbourhoods.index", compact("neighbourhoods"));
    }


    public function create()
    {

        $cities = City::orderBy("name", "asc")->get();
        return view("admin.neighbourhoods.create", compact("cities"));
    }


    public function store(StoreNeighbourhoodRequest $request)
    {
        $data  = $request->validated();


        $neighbourhood = Neighbourhood::create($data);

        toastr()->success(trans('keywords.Added Successfully'));

        return redirect()->route("admin.neighbourhoods.index");
    }


    public function show(Neighbourhood $neighbourhood)
    {
        abort(403);
    }


    public function edit(Neighbourhood $neighbourhood)
    {
        $cities = City::orderBy("name", "asc")->get();

        return view("admin.neighbourhoods.edit", compact("neighbourhood", "cities"));
    }


    public function update(UpdateNeighbourhoodRequest $request, Neighbourhood $neighbourhood)
    {

        $data  = $request->validated();


        $neighbourhood->update($data);

        toastr()->success('keywords.Updated Successfully');

        return redirect()->route("admin.neighbourhoods.index");
    }


    public function destroy(Neighbourhood $neighbourhood)
    {
        $neighbourhood->delete();

        return response()->json();
    }
}
