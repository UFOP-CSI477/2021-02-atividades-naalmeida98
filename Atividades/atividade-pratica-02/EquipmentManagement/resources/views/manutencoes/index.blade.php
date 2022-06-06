@extends('app')

@section('content')

<div class="p-5">

<h2>Lista de Manutenções</h2>

<a class="btn btn-primary p-3 m-3 w-30" style="background-color: #63625F; border-color:#63625F" href="{{ route('manutencoes.create') }}">Cadastrar</a>

<table class="table table-stripped table-hover">

    <thead>
        <tr>
            <th>Código</th>
            <th>Data Limite</th>
            <th>Nome do Equipamento</th>
            <th>Nome do Usuário</th>
            <th>Tipo da Manutenção</th>
            <th>Descrição da manutenção/problema</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>

        @foreach($manutencoes as $m)

        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->datalimite }}</td>
            <td>{{ $m->nome }}</td>
            <td>{{ $m->nome_user }}</td>
            <td>{{ $m->tipo }}</td>
            <td>{{ $m->descricao }}</td>
            <td>
            <a href="{{ route('menutencoes.edit', $m->id) }}"><i class="bi bi-pencil-square"> </i>Editar</a>
            <a href="{{ route('menutencoes.show', $m->id) }}"><i class="bi bi-binoculars"> </i>Excluir</a>
        </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>


@endsection
