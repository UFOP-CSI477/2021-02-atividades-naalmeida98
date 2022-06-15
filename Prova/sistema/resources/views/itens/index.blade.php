@extends('app')

@section('content')

<div class="p-5">

    <h2>Lista de Itens</h2>

    @if(Auth::check())
    <a class="btn btn-primary p-3 m-3 w-30" style="background-color: #63625F; border-color:#63625F;" href="{{ route('itens.create') }}">Cadastrar</a>
    @endif

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>

            @foreach($itens as $i)

            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->descricao }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>


@endsection
