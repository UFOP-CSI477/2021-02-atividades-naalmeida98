@extends('app')

@section('content')

<div style="margin:10px">
    <a href="/rel_equip" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%;  margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">MANUTENÇÕES POR EQUIPAMENTOS</p>
        </div>
    </a>

    <a href="{{ route('equipamentos.index') }}" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%;  margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">EQUIPAMENTOS</p>
        </div>
    </a>

    <a href="{{ route('manutencoes.index') }}" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%; margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">MANUTENÇÕES</p>
        </div>
    </a>

    <a href="/users/index" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%; margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">USUÁRIOS</p>
        </div>
    </a>

</div>


@endsection
