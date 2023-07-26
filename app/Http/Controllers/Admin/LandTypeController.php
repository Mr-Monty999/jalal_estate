<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLandTypeRequest;
use App\Http\Requests\UpdateLandTypeRequest;
use App\Models\LandType;

class LandTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreLandTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandTypeRequest $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandType  $landType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandType $landType)
    {
        //
    }
}
