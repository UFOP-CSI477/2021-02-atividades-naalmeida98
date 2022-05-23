<?php

namespace App\Http\Controllers;

use App\Models\Necklace;
use App\Http\Requests\StoreNecklaceRequest;
use App\Http\Requests\UpdateNecklaceRequest;

class NecklaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $necklaces = Necklace::orderBy('name')->get();
        return view('products.necklaces.necklaces', ['necklaces' => $necklaces]);
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
     * @param  \App\Http\Requests\StoreNecklaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNecklaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Necklace  $necklace
     * @return \Illuminate\Http\Response
     */
    public function show(Necklace $necklace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Necklace  $necklace
     * @return \Illuminate\Http\Response
     */
    public function edit(Necklace $necklace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNecklaceRequest  $request
     * @param  \App\Models\Necklace  $necklace
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNecklaceRequest $request, Necklace $necklace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Necklace  $necklace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Necklace $necklace)
    {
        //
    }
}
