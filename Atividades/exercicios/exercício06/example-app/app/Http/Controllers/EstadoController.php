<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Http\Requests\StoreEstadoRequest;
use App\Http\Requests\UpdateEstadoRequest;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // AQUI REALIZO TODOS OS FILTROS DE DADOS PARA O GET,POST, UPDATE E DELETE

    public function index()
    {
        //retorna todos os estados cadastrados:
        $estados = Estado::orderBy('nome')->get();
        return view('estados.index', ['estados' => $estados]);
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
     * @param  \App\Http\Requests\StoreEstadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstadoRequest  $request
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstadoRequest $request, Estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //
    }
}
