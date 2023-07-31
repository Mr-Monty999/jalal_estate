<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLandOfferRequest;
use App\Http\Requests\UpdateLandOfferRequest;
use App\Models\LandOffer;

class LandOfferController extends Controller
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
     * @param  \App\Http\Requests\StoreLandOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandOfferRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandOffer  $landOffer
     * @return \Illuminate\Http\Response
     */
    public function show(LandOffer $landOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandOffer  $landOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(LandOffer $landOffer)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandOffer  $landOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandOffer $landOffer)
    {
        //
    }
}
