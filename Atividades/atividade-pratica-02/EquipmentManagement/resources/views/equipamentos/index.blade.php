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
                    <div class="row g-2">
                        <div class="col-sm-2">
                            <a href="{{ route('equipamentos.edit', $e->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                        <div class="col-sm-2">
                            <form action="{{ route('equipamentos.destroy', $e->id) }}" method="post">

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
