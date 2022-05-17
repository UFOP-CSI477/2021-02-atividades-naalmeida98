<?php

namespace App\Http\Controllers;

use App\Models\Earring;
use App\Http\Requests\StoreEarringRequest;
use App\Http\Requests\UpdateEarringRequest;

class EarringController extends Controller
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
     * @param  \App\Http\Requests\StoreEarringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEarringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function show(Earring $earring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function edit(Earring $earring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEarringRequest  $request
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEarringRequest $request, Earring $earring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Earring $earring)
    {
        //
    }
}
