@extends('app')

@section('content')

<div class="p-5">

    <h2>Lista de Entidades</h2>

    @if(Auth::check())
    <a class="btn btn-primary p-3 m-3 w-30" style="background-color: #63625F; border-color:#63625F;" href="{{ route('entidades.create') }}">Cadastrar</a>
    @endif

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>

            @foreach($entidades as $e)

            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nome }}</td>
                <td>{{ $e->bairro }}</td>
                <td>{{ $e->cidade }}</td>
                <td>{{ $e->estado }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>


@endsection
