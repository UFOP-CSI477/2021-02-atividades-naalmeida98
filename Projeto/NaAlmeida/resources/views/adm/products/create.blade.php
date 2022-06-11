@extends('app')

@section('content')

<div class="container">
    <main>
        <div class="col-md-7 col-lg-12 my-5">
            <h4 class="mb-3" style="color: #696969;">Adicionar novo produto</h4>
            <form action="{{ route('products.store') }}" method="POST">

                @csrf

                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="category_id" class="form-label">Categoria</label>
                        <select class="form-select" id="category_id" name="category_id" >
                            <option value="select">Selecione</option>
                            <option value="1">Anel</option>
                            <option value="2">Brinco</option>
                            <option value="3">Cordão</option>
                            <option value="4">Pingente</option>
                            <option value="5">Pulseira</option>
                        </select>
                    </div>

                    <div class="col-sm-8">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required="">
                    </div>

                    <div class="col-sm-4">
                        <label for="code" class="form-label">Código</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="" value="" required="">
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea type="text" class="form-control" id="description" name="description" required=""></textarea>
                    </div>

                    <script>
                        function calculaValueAp() {
                            console.log("aqui")
                            value_av = parseFloat(document.getElementById("value_av").value);
                            porcentage = parseFloat(document.getElementById("porcentage").value);
                            console.log("value_av", value_av);
                            console.log("porcentage", porcentage);
                            value_ap = value_av * porcentage;
                            document.getElementById("value_ap").value = value_ap.toFixed(2);
                        }
                    </script>

                    <div class="col-md-6">
                        <label for="value_av" class="form-label">Valor à vista (R$)</label>
                        <input type="number" class="form-control" step=0.01 id="value_av" name="value_av" required="">
                    </div>

                    <!-- <div class="col-md-3">
                        <label for="porcentage" class="form-label">% - à prazo</label>
                        <input type="number" class="form-control" id="porcentage" placeholder="" required="" value="1.1">
                    </div>

                    <div class="col-md-1">
                        <a onclick="calculaValueAp()" class=" btn btn-lg m-2" style="background-color: #FA6699;">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </a>
                    </div> -->

                    <div class="col-md-6">
                        <label for="value_ap" class="form-label">Valor à prazo (R$)</label>
                        <input type="number" class="form-control" step=0.01 id="value_ap" name="value_ap" required="">
                    </div>

                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit" style="background-color: #FA6699; border-color: #FA6699;">Cadastrar</button>
            </form>
        </div>
</div>
</main>

</div>

@endsection
