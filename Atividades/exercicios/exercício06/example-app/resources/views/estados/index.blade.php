@extends('app')

@section('conteudo')

@foreach($estados as $e)

<p>{{$e->id}}</p>
<p>{{$e->nome}}</p>

@endforeach


@endsection



