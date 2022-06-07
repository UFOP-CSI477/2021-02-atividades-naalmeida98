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
            <div class="row g-2">
                        <div class="col-sm-2">
                            <a href="{{ route('manutencoes.edit', $m->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                        <div class="col-sm-2">
                            <form action="{{ route('manutencoes.destroy', $m->id) }}" method="post">

                                @csrf
                                @method('DELETE')

                                <input type="submit" value="Excluir" class="btn btn-danger">

                            </form>
                        </div>

                    </div>
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>


@endsection
