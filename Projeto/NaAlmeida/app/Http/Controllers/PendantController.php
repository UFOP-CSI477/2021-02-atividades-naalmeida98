<?php

namespace App\Http\Controllers;

use App\Models\Pendant;
use App\Http\Requests\StorePendantRequest;
use App\Http\Requests\UpdatePendantRequest;

class PendantController extends Controller
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
     * @param  \App\Http\Requests\StorePendantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePendantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendant  $pendant
     * @return \Illuminate\Http\Response
     */
    public function show(Pendant $pendant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendant  $pendant
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendant $pendant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendantRequest  $request
     * @param  \App\Models\Pendant  $pendant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePendantRequest $request, Pendant $pendant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendant  $pendant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendant $pendant)
    {
        //
    }
}
