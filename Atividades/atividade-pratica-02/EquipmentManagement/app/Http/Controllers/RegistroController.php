<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Http\Requests\StoreRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;

class RegistroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manutencoes = Registro::orderBy('datalimite')->paginate(20);
        return view('manutencoes.index', ['manutencoes' => $manutencoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manutencoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistroRequest $request)
    {
        Registro::create($request->all());
        // session()->flash('mensagem', 'Produto cadastrado com sucesso!');
        return redirect()->route('manutencoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        return view('manutencoes.edit', ['manutencao' => $registro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistroRequest  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistroRequest $request, Registro $registro)
    {
        $registro->fill($request->all());
        if ($registro->save()) {
            session()->flash('mensagem', 'Manutenção atualizada com sucesso!');
            return redirect()->route('manutencoes.index');
        } else {
            session()->flash('mensagem-erro', 'Erro na atualização da manutenção!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        if($registro->delete()) {
            session()->flash('mensagem', 'Mnutenção excluída com sucesso!');
            return redirect()->route('manutencoes.index');
        } else {
            session()->flash('mensagem-erro', 'Erro na exclusão do manutenção!');
            return back();
        }
    }
}
