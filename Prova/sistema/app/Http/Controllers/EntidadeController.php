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
        $entidades = Entidade::orderBy('nome')->paginate(20);
        return view('entidades.index', ['entidades' => $entidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntidadeRequest $request)
    {
        Entidade::create($request->all());
        session()->flash('mensagem', 'Cadastrado com sucesso!');
        return redirect()->route('entidades.index');
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
        if ($entidade->coletas->count() > 0) {
            session()->flash('mensagem-erro', 'Exclusão não permitida! Existem coletas associadas.');
            return back()->withInput();
        }

        if($entidade->delete()) {
            session()->flash('mensagem', 'Excluído com sucesso!');
            return redirect()->route('entidades.index');
        } else {
            session()->flash('mensagem-erro', 'Erro na exclusão!');
            return back();
        }
    }
}
