@extends('app')

@section('content')

<div class="container">
    <main>
        <div class="col-md-7 col-lg-12 my-5">
            <h4 class="mb-3" style="color: #696969;">Adicionar novo item</h4>
            <form action="{{ route('itens.store') }}" method="POST">

                @csrf

                <div class="row g-3">

                    <div class="col-sm-12">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="" required="">
                    </div>

                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit" style="background-color: #636257;  border-color: #636257;">Cadastrar</button>
            </form>
        </div>
</div>
</main>

</div>

@endsection
