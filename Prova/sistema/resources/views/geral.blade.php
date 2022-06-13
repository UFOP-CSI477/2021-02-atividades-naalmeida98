@extends('app')

@section('content')

<div class="p-5">

    <h2>Doações recebidas</h2>

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Entidade</th>
                <th>Itens</th>
            </tr>
        </thead>

        <tbody>

            @foreach($coletas as $c)

            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->descricao }}</td>
            </tr>
            <tr>
                <td>TOTAL GERAL</td>
                <td></td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

<div class="p-5">

    <h2>Total de itens recebidos</h2>

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Item</th>
                <th>Quantidade</th>
                <th>Porcentagem</th>
            </tr>
        </thead>

        <tbody>

            @foreach($coletas as $c)

            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->descricao }}</td>
                <td>{{ $c->descricao }}</td>
            </tr>
            <tr>
                <td>TOTAL GERAL</td>
                <td></td>
                <td></td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>


@endsection
