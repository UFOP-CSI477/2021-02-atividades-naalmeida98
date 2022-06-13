<?php

namespace App\Http\Controllers;

use App\Models\Entidade;
use App\Http\Requests\StoreEntidadeRequest;
use App\Http\Requests\UpdateEntidadeRequest;

class EntidadeController extends Controller
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
     * @param  \App\Http\Requests\StoreEntidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntidadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function show(Entidade $entidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidade $entidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntidadeRequest  $request
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntidadeRequest $request, Entidade $entidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidade $entidade)
    {
        //
    }
}
