@extends('app')

@section('content')

<div class="p-5">

    <h2>Total - Doações recebidas</h2>

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Entidade</th>
                <th>Itens</th>
            </tr>
        </thead>

        <tbody>


            @foreach($coletas_entidade as $c)

            <tr>
                <td>{{ $c->entidade->nome }}</td>
                <td>{{ $c->total_qtd }}</td>
            </tr>


            @endforeach

            <tr>
                <td>TOTAL GERAL</td>
                <td>{{ $total_item }}</td>
            </tr>

        </tbody>

    </table>

</div>

<div class="p-5">

    <h2>Total - Itens recebidos</h2>

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Item</th>
                <th>Quantidade</th>
                <th>Porcentagem</th>
            </tr>
        </thead>

        <tbody>

            @foreach($coletas_item as $c)

            @php
                $porcentagem = ($c->total_qtd * 100)/$total_item
            @endphp

            <tr>
                <td>{{ $c->item->descricao }}</td>
                <td>{{ $c->total_qtd }}</td>
                <td> {{ $porcentagem }} % </td>
            </tr>


            @endforeach
            <tr>
                <td>TOTAL GERAL</td>
                <td>{{ $total_item }}</td>
                <td>100%</td>
            </tr>

        </tbody>

    </table>

</div>


@endsection
