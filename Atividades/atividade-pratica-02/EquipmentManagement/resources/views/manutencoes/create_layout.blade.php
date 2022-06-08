@extends('app')

@section('content')

<div class="container">
    <main>
        <div class="col-md-7 col-lg-12 my-5">
            <h4 class="mb-3" style="color: #696969;">Adicionar nova manutenção</h4>
            <form action="{{ route('manutencoes.store') }}" method="POST">

                @csrf

                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="equipamento_id" class="form-label">Nome do Equipamento</label>
                        <select class="form-select" id="equipamento_id" name="equipamento_id">
                            <option value="select">Selecione</option>
                            @foreach($equipamentos as $e)
                                <option value="{{ $e->id }}">{{ $e->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    @yield('form')

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit" style="background-color: #636257;  border-color: #636257;">Cadastrar</button>
            </form>
        </div>
</div>
</main>

</div>

@endsection
