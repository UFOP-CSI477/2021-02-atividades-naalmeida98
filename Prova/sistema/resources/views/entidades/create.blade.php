@extends('app')

@section('content')

<div class="container">
    <main>
        <div class="col-md-7 col-lg-12 my-5">
            <h4 class="mb-3" style="color: #696969;">Adicionar novo item</h4>
            <form action="{{ route('entidades.store') }}" method="POST">

                @csrf

                <div class="row g-3">

                    <div class="col-sm-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" required="">
                    </div>

                    <div class="col-sm-6">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" value="" required="">
                    </div>

                    <div class="col-sm-6">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" value="" required="">
                    </div>

                    <div class="col-sm-6">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" placeholder="" value="" required="">
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
