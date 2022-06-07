@extends('app')

@section('content')

<div class="p-5">

    <h2>Lista de Usuários</h2>

    <a class="btn btn-primary p-3 m-3 w-30" style="background-color: #63625F; border-color:#63625F;" href="/users/create">Cadastrar</a>

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
            </tr>
        </thead>

        <tbody>



        </tbody>

    </table>

</div>


@endsection
