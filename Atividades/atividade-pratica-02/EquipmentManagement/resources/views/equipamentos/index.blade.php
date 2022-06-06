@extends('app')

@section('content')

<div class="p-5">

<h2>Lista de Equipamentos</h2>

<a class="btn btn-primary p-3 m-3 w-30" style="background-color: #63625F; border-color:#63625F;" href="{{ route('equipamentos.create') }}">Cadastrar</a>

<table class="table table-stripped table-hover">

    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>

        @foreach($equipamentos as $e)

        <tr>
            <td>{{ $e->id }}</td>
            <td>{{ $e->nome }}</td>
            <td>
            <a href="{{ route('equipamentos.edit', $e->id) }}"><i class="bi bi-pencil-square"> </i>Editar</a>
            <a href="{{ route('equipamentos.show', $e->id) }}"><i class="bi bi-binoculars"> </i>Excluir</a>
        </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>


@endsection
