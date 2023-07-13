<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandlordRequest;
use App\Http\Requests\UpdateLandlordRequest;
use App\Models\Landlord;

class LandlordController extends Controller
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
     * @param  \App\Http\Requests\StoreLandlordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandlordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show(Landlord $landlord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function edit(Landlord $landlord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandlordRequest  $request
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandlordRequest $request, Landlord $landlord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landlord $landlord)
    {
        //
    }
}
