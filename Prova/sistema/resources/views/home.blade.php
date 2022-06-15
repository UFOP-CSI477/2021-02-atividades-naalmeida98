@extends('app')

@section('content')

<div style="margin:10px">
    <a href="/geral" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%;  margin-bottom:10px"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">ÁREA GERAL</p>
        </div>
    </a>

    <a href="{{ route('login') }}" style="color:white;" >
        <div style="background-color:#636257; height:80px; width:100%;"  >
            <p class="d-flex flex-row justify-content-center p-3" style="font-size: 25px;">ÁREA ADMINSTRATIVA</p>
        </div>
    </a>

</div>






@endsection
