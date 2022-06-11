@extends('app')

@section('content')

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2 style="color: #696969;">Finalizar compra</h2>
            <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text" style="color: #FA6699;">Minhas joias</span>
                    <span class="badge  rounded-pill" style="background-color: #FA6699;">3</span>
                </h4>
                <ul class="list-group mb-3">
                    @php
                    $value_total_av = 0;
                    $value_total_ap = 0;
                    @endphp

                    @foreach(session('shoppings_list') as $product)
                    <li class="list-group-item d-flex justify-content-between lh-sm" style="color: #696969;">
                        <div>
                            <h6 class="my-0">{{data_get($product,'name')}}</h6>
                            <small class="text-muted">{{data_get($product,'qtd')}} unidades</small>
                        </div>
                        <span class="text-muted">R$ {{data_get($product,'value_ap')}}0 ap</span>
                    </li>

                    @php
                    $value_total_av = $value_total_av + data_get($product,'value_av');
                    $value_total_ap = $value_total_ap + data_get($product,'value_ap');
                    @endphp
                    @endforeach

                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6 class="my-0">Total (R$)</h6>
                            <small class="text-muted">
                                @if($value_total_ap >= 150)
                                até 3x sem juros
                                @else
                                até 2x sem juros
                                @endif

                            </small>
                        </div>

                        <strong>R$ {{ $value_total_ap }}0</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Desconto à vista</h6>
                            <!-- <small>EXAMPLECODE</small> -->
                        </div>
                        <span class="text-success">R$ {{ $value_total_av }}.00</span>
                    </li>

                </ul>

                <!-- <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form> -->
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3" style="color: #696969;">Preencha os seus dados</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Primeiro nome</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Último nome</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="cpf" class="form-label">CPF <span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="cpf" placeholder="111.111.111-11">
                            <div class="invalid-feedback">
                                Please enter a valid cpf for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="my-1">
                            <div class="form-check">
                                <input onclick="checkDelivery('entrega')" id="entrega" name="delivery" type="radio" class="form-check-input" checked="yes" required="">
                                <label class="form-check-label" for="entrega">Entrega</label>
                            </div>
                            <div class="form-check">
                                <input onclick="checkDelivery('retirada')" id="retirada" name="delivery" type="radio" class="form-check-input"  required="">
                                <label class="form-check-label" for="retirada">Retirada</label>
                            </div>
                        </div>

                        <hr class="my-4">


                        <!-- INFO SOBRE ENTREGA -->


                            <div class="col-sm-9">
                                <label for="rua" class="form-label">Rua</label>
                                <input type="text" class="form-control" id="rua" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label for="numero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="numero" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-9">
                                <label for="address2" class="form-label">Bairro/Avenida<span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="address2" >
                            </div>

                            <div class="col-sm-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">Estado</label>
                                 <input type="text" class="form-control" id="estado" placeholder="" value="" required="">

                                <!-- <select class="form-select" id="state" required="">
                                    <option value="">Choose...</option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div> -->
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" placeholder="" value="" required="">

                                <!-- <select class="form-select" id="country" required="">
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div> -->
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>



                    </div>


                    <hr class="my-4">

                    <h4 class="mb-3">Pagamento</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                            <label class="form-check-label" for="credit">Crédito - ( R$ {{ $value_total_ap }}0 )</label>
                        </div>
                        <div class="form-check">
                            <input id="pix" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="pix">Pix - ( R$ {{ $value_total_av }}.00 )</label>
                        </div>
                    </div>

                    <hr class="my-4">

                    <a href="/finished" class="w-100 btn btn-primary btn-lg my-5" type="submit" style="background-color: #FA6699; border-color: #FA6699;">Finalizar</a>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection
