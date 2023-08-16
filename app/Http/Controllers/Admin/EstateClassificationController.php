<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEstateClassificationRequest;
use App\Http\Requests\UpdateEstateClassificationRequest;
use App\Models\EstateClassification;
use App\Services\EstateClassificationService;

class EstateClassificationController extends Controller
{

    public function __construct()
    {
        $this->middleware("can:view_estate_classifications")->only(["index", "show"]);
        $this->middleware("can:edit_estate_classifications")->only(["edit", "update"]);
        $this->middleware("can:create_estate_classifications")->only(["create", "store"]);
        $this->middleware("can:delete_estate_classifications")->only(["destroy"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $estateClassifications = EstateClassification::latest()->paginate(10);
        return view("admin.estate-classifications.index", compact("user", "estateClassifications"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view("admin.estate-classifications.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEstateClassificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstateClassificationRequest $request)
    {
        EstateClassificationService::store($request);
        toastr()->success(trans("keywords.Added Successfully"));
        return redirect()->route("admin.estate-classifications.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstateClassification  $estateClassification
     * @return \Illuminate\Http\Response
     */
    public function show(EstateClassification $estateClassification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstateClassification  $estateClassification
     * @return \Illuminate\Http\Response
     */
    public function edit(EstateClassification $estateClassification)
    {
        $user = auth()->user();
        return view("admin.estate-classifications.edit", compact("estateClassification", "user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstateClassificationRequest  $request
     * @param  \App\Models\EstateClassification  $estateClassification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstateClassificationRequest $request, EstateClassification $estateClassification)
    {
        EstateClassificationService::update($request, $estateClassification);
        toastr()->success(trans("keywords.updated successfully"));
        return redirect()->route("admin.estate-classifications.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstateClassification  $estateClassification
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstateClassification $estateClassification)
    {
        $estateClassification->delete();

        toastr()->success(trans("keywords.deleted successfully"));
        return response()->json();
    }
}
