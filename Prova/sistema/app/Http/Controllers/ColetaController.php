<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use App\Http\Requests\StoreColetaRequest;
use App\Http\Requests\UpdateColetaRequest;
use App\Models\Entidade;
use App\Models\Item;
use Exception;

class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        $coletas = Coleta::get();
        }catch(Exception $error){
            session()->flash('mensagem-erro', 'Erro!!!');
        }
        return view('coletas.index', ['coletas' => $coletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
        $itens = Item::get();
        $entidades = Entidade::get();
        }catch(Exception $error){
            session()->flash('mensagem-erro', 'Erro!!!');
        }
        return view('coletas.create',['itens' => $itens,'entidades' => $entidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColetaRequest $request)
    {
        try{
        Coleta::create($request->all());
        session()->flash('mensagem', 'Cadastrado com sucesso!');
        }catch(Exception $error){
            session()->flash('mensagem-erro', 'Erro!!!');
        }
        return redirect()->route('coletas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta)
    {
        try{
        $itens = Item::get();
        $entidades = Entidade::get();
        }catch(Exception $error){
            session()->flash('mensagem-erro', 'Erro!!!');
        }
        return view('coletas.edit',['itens' => $itens,'entidades' => $entidades, 'coleta' => $coleta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColetaRequest  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColetaRequest $request, Coleta $coleta)
    {
        $coleta->fill($request->all());
        if ( $coleta->save() ) {
            session()->flash('mensagem', 'Atualizado com sucesso!');
            return redirect()->route('coletas.index');
        } else {
            session()->flash('mensagem-erro', 'Erro na atualiza????o');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta)
    {
        if($coleta->delete()) {
            session()->flash('mensagem', 'Exclu??do com sucesso!');
            return redirect()->route('coletas.index');
        } else {
            session()->flash('mensagem-erro', 'Erro na exclus??o!');
            return back();
        }
    }
}
