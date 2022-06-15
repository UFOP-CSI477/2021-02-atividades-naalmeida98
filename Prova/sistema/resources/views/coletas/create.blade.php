@extends('app')

@section('content')

<div class="container">
    <main>
        <div class="col-md-7 col-lg-12 my-5">
            <h4 class="mb-3" style="color: #696969;">Adicionar novo item</h4>
            <form action="{{ route('coletas.store') }}" method="POST">

                @csrf

                <div class="row g-3">

                    <div class="col-sm-6">
                        <label for="item_id" class="form-label">Item</label>
                        <select class="form-select" id="item_id" name="item_id">
                            <option value="select">Selecione</option>
                            @foreach($itens as $i)
                            <option value="{{ $e->id }}">{{ $i->descricao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="entidade_id" class="form-label">Entidade</label>
                        <select class="form-select" id="entidade_id" name="entidade_id">
                            <option value="select">Selecione</option>
                            @foreach($entidades as $e)
                            <option value="{{ $e->id }}">{{ $e->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-">
                        <label for="quantidade" class="form-label">Quantidade</label>
                        <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="" value="" required="">
                    </div>

                    <div class="col-sm-">
                        <label for="data" class="form-label">Data</label>
                        <input type="text" class="form-control" id="data" name="data" placeholder="" value="" required="">
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
