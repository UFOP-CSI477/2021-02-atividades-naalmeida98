@extends('app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 align-items-stretch py-3">
        <div class="col-sm-8 row row-cols-1">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button style="background-color: #D16D6F" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button style="background-color: #D16D6F" type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button style="background-color: #D16D6F" type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/products/<?php echo $product->code ?>_1.jpeg" alt="image01" class="imagesBook">
                        <div class="container">
                            <div class="carousel-caption text-start">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/<?php echo $product->code ?>_2.jpeg" alt="image02" class="imagesBook">
                        <div class="container">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/<?php echo $product->code ?>_3.jpeg"  alt="image03" class="imagesBook">
                        <div class="container">
                            <div class="carousel-caption text-end"></div>
                        </div>
                    </div>
                </div>
                <button style="background-color: #D16D6F" class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button style="background-color: #D16D6F" class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span  class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
        <div class="col-sm-4">
            <div class="fs-2 py-1">
                <div class="nameProduct" id="nameProduct">
                    {{ $product->name }}
                </div>
            </div>
            <div class="productSpecification">
                <form action="">
                    <div class="d-flex flex-column px-4 py-2 justify-content-start">
                        <div class="fs-4" style="font-weight:bold;" id="valueAvProduct">R$ {{ $product->value_av }}.00 à vista</div>
                        <div class="fs-7" id="valueApProduct">R$ {{ $product->value_ap }}0 à prazo</div>
                    </div>

                    <div class="px-4">
                        <a class="btn text-white p-1" type="button" onclick="minusQtd()">
                            <div class="d-flex flex-wrap justify-content-center">
                                <i class="bi bi-dash-circle-fill" style="color: #D16D6F;"></i>
                            </div>
                        </a>
                        <input type="text" name="qtd" id="qtdProduct" value="{{ $product->qtd_cart }}" class="inputQTD" >

                        <a class="btn text-white p-1" type="button" onclick="plusQtd()">
                            <div class="d-flex flex-wrap justify-content-center">
                                <i class="bi bi-plus-circle-fill" style="color: #D16D6F;"></i>
                            </div>
                        </a>
                    </div>

                    <script>
                        function addCart() {
                        id = "<?php echo $product->id ?>";
                        console.log(id);
                        qtd = document.getElementById("qtdProduct").value;
                        url = "/shoppings/add/" + id + "/bag/" + qtd;
                        window.location.href = url;
                        }

                    </script>

                    <div class="py-3">
                        <a class="btn text-white btn-lg btn-block w-100" id="btnAddBag" type="button"
                            onclick="addCart()" >
                            <div class="d-flex flex-wrap justify-content-center">
                                <i class="bi bi-bag-plus-fill" style="background-color: #F06E7F; font-size:1rem;"> CARRINHO</i>
                            </div>
                        </a>
                    </div>
                    <div class="fs-13 p-2" id="descriptionProduct">
                        {{ $product->description }}
                    </div>
                    <div class="fs-13 p-2" id="codeProduct">
                        {{ $product->code }}
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('js/shopping/shoppingBag.js') }}"></script>
<script src="{{ asset('js/products/product.js') }}"></script>
<link href="{{ asset('css/products/product.css') }}" rel="stylesheet">

@endsection
