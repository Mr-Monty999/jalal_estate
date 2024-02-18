<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLandTypeRequest;
use App\Http\Requests\UpdateLandTypeRequest;
use App\Models\LandType;
use App\Services\LandTypeService;

class LandTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:view_land_types")->only(["index", "show"]);
        $this->middleware("can:edit_land_types")->only(["edit", "update"]);
        $this->middleware("can:create_land_types")->only(["create", "store"]);
        $this->middleware("can:delete_land_types")->only(["destroy"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landTypes = LandType::latest()->paginate(10);

        return view('admin.land-types.index', compact('landTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();

        return view("admin.land-types.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLandTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandTypeRequest $request)
    {
        LandTypeService::store($request);

        toastr()->success(trans('keywords.Added Successfully'));
        return redirect()->route('admin.land-types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandType  $landType
     * @return \Illuminate\Http\Response
     */
    public function show(LandType $landType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandType  $landType
     * @return \Illuminate\Http\Response
     */
    public function edit(LandType $landType)
    {
        $user = auth()->user();

        return view("admin.land-types.edit", compact("landType", "user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandTypeRequest  $request
     * @param  \App\Models\LandType  $landType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandTypeRequest $request, LandType $landType)
    {
        LandTypeService::update($request, $landType);

        toastr()->success(trans('keywords.updated successfully'));
        return redirect()->route('admin.land-types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandType  $landType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandType $landType)
    {
        $landType->delete();

        toastr()->success(trans('keywords.deleted successfully'));
        return response()->json();
    }
}
