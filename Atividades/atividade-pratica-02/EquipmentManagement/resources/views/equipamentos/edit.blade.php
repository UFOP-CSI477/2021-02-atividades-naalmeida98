@extends('app')

@section('content')

<div class="container">
    <main>
        <div class="col-md-7 col-lg-12 my-5">
            <h4 class="mb-3" style="color: #696969;">Adicionar novo equipamento</h4>
            <form action="{{ route('equipamentos.update', $equipamento->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="row g-3">

                    <div class="col-sm-12">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="{{ $equipamento->nome }}" required="">
                    </div>

                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit" style="background-color: #636257;  border-color: #636257;">Editar</button>
            </form>
        </div>
</div>
</main>

</div>

@endsection
