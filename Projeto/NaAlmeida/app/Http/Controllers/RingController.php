<?php

namespace App\Http\Controllers;

use App\Models\Ring;
use App\Http\Requests\StoreRingRequest;
use App\Http\Requests\UpdateRingRequest;

class RingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Products.ring');
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
     * @param  \App\Http\Requests\StoreRingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function show(Ring $ring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function edit(Ring $ring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRingRequest  $request
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRingRequest $request, Ring $ring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ring $ring)
    {
        //
    }
}
