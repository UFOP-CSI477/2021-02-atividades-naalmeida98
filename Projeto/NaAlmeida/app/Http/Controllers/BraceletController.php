<?php

namespace App\Http\Controllers;

use App\Models\Bracelet;
use App\Http\Requests\StoreBraceletRequest;
use App\Http\Requests\UpdateBraceletRequest;

class BraceletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bracelets = Bracelet::orderBy('name')->get();
        return view('products.bracelets.bracelets', ['bracelets' => $bracelets]);
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
     * @param  \App\Http\Requests\StoreBraceletRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBraceletRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bracelet  $bracelet
     * @return \Illuminate\Http\Response
     */
    public function show(Bracelet $bracelet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bracelet  $bracelet
     * @return \Illuminate\Http\Response
     */
    public function edit(Bracelet $bracelet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBraceletRequest  $request
     * @param  \App\Models\Bracelet  $bracelet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBraceletRequest $request, Bracelet $bracelet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bracelet  $bracelet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bracelet $bracelet)
    {
        //
    }
}
