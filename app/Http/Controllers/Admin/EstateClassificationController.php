<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstateClassificationRequest;
use App\Http\Requests\UpdateEstateClassificationRequest;
use App\Models\EstateClassification;

class EstateClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreEstateClassificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstateClassificationRequest $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstateClassification  $estateClassification
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstateClassification $estateClassification)
    {
        //
    }
}
