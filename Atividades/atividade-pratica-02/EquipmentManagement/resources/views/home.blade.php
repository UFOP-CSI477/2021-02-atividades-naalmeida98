@extends('app')

@section('content')

<!-- <div class="d-flex flex-row justify-content-center">
    <h2 style="margin-top: 30px ;">Seja bem-vindo!</h2>
</div> -->

<div class="d-flex flex-row justify-content-center h-50">
    <img src="{{ asset('images/home.jpeg') }}" alt="home" width="100%">
</div>

<div class="d-flex flex-row justify-content-center">
  <div class="p-3" > <a href="{{ route('equipamentos.index') }}" class="btn btn-dark">Relatório de equipamentos</a> </div>
  <div class="p-3" > <a href="{{ route('manutencoes.index') }}" class="btn btn-dark">Relatório de manutenções</a> </div>
  <div class="p-3" > <a href="/users/index" class="btn btn-dark">Área administrativa</a> </div>
</div>

@endsection
