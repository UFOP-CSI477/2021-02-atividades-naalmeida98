@extends('app')

@section('content')

<div class="p-5">

    <h2>Relatório de manutenção por equipamento</h2>

    <script>
        function getEquipamento(){
            equipamento = document.getElementById('equipamento_id').value;
            url = "/rel_equip/" + equipamento;
            window.location.href = url;
        }

    </script>

    <div class="col-md-7 col-lg-12 my-5">

                <div class="row g-3">

                <div class="col-sm-6">
                        <label for="equipamento_id" class="form-label">Equipamento</label>
                        <select class="form-select" id="equipamento_id" name="equipamento_id">
                            <option value="select">Selecione</option>
                            @foreach($equipamentos as $e)
                                <option value="{{ $e->id }}">{{ $e->nome }}</option>
                            @endforeach
                        </select>
                </div>

                </div>

                <hr class="my-4">

                <button onclick="getEquipamento()" class="w-100 btn btn-primary btn-lg" type="submit" style="background-color: #636257;  border-color: #636257;">Buscar</button>
    </div>

    @php
        if($manutencoes == null){
            $manutencoes = [];
        }
    @endphp

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>Cod</th>
                <th>Data Limite</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Tipo da Manutenção</th>
                <th>Descrição do problema</th>

            </tr>
        </thead>

        <tbody>

            @php
                $qtd_total = 0;
            @endphp

            @foreach($manutencoes as $m)
            @php
                $qtd_total++;

                $tipo_name='';
                if($m->tipo == 1){
                    $tipo_name = 'Preventiva';
                }elseif($m->tipo == 2){
                    $tipo_name = 'Corretiva';
                }else{
                    $tipo_name = 'Urgente';
                }
            @endphp

            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->datalimite }}</td>
                <td>{{ $m->equipamento->nome }}</td>
                <td>{{ $m->user->name }}</td>
                <td>{{ $tipo_name }}</td>
                <td>{{ $m->descricao }}</td>
            </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td>{{ $qtd_total }}</td>
            </tr>

        </tbody>

    </table>


</div>


@endsection
