@extends('app')

@section('content')

<div style="margin:10px">
    <a href="/geral" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%;  margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">ÁREA GERAL</p>
        </div>
    </a>
    @if(!Auth::check())
    <a href="{{ route('login') }}" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%;"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">ÁREA ADMINSTRATIVA</p>
        </div>
    </a>
    @endif
    @if(Auth::check())
    <a href="{{ route('itens.index') }}" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%;  margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">ITENS</p>
        </div>
    </a>
    <a href="{{ route('entidades.index') }}" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%; margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">ENTIDADES</p>
        </div>
    </a>
    <a href="{{ route('coletas.index') }}" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%; margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">COLETAS</p>
        </div>
    </a>
    @endif

</div>






@endsection
