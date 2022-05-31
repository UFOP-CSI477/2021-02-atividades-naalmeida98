@extends('app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 align-items-stretch py-3">
        <div class="col-sm-8 row row-cols-1">
            <!-- <img src="{{ asset('images/image04.jpg') }}" alt="image03" width="100%">

            <div style="background-color: black ;">
                <img src="" alt="">
            </div>
            <div style="background-color: pink;">
                <img src="" alt="">
            </div> -->

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/image04.jpg') }}" alt="image01" class="imagesBook">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <!-- <h1>COMPRE E GANHE</h1>
                        <p>uma maleta exclusiva da Rommanel</p>
                        <p><a class="btn btn-lg btn-primary" style="background-color: #FA6699; border-color:#FA6699" href="#">Sign up today</a></p> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/image05.jpg') }}" alt="image02" class="imagesBook">
                        <div class="container">
                            <div class="carousel-caption">
                                <!-- <p></p>
                        <h1>Joias a partir de R$ 43,00</h1>
                        <p><a class="btn btn-lg btn-primary" style="background-color: #FA6699; border-color:#FA6699" href="#">Learn more</a></p> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/image03.jpg') }}" alt="image03" class="imagesBook">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <!-- <h1>Receba no conforto da sua casa</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" style="background-color: #FA6699; border-color:#FA6699" href="#">Browse gallery</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
        <div class="col-sm-4">
            <div class="fs-2 py-1">
                <div class="nameProduct">
                    {{ $product->name }} - {{session('product')}}
                </div>
            </div>
            <div class="productSpecification">
                <form action="">
                    <div class="d-flex flex-column px-4 py-2 justify-content-start">
                        <div class="fs-4" style="font-weight:bold;">R$ {{ $product->value_av }}.00 à vista</div>
                        <div class="fs-7 ">R$ {{ $product->value_ap }}0 à prazo</div>
                    </div>

                    <div class="px-4">
                        <a class="btn text-white p-1" type="button" onclick="minusQtd()">
                            <div class="d-flex flex-wrap justify-content-center">
                                <i class="bi bi-dash-circle-fill" style="color: #FA6699;"></i>
                            </div>
                        </a>
                        <input type="text" name="qtd" id="qtd" value="1" class="inputQTD">
                        <a class="btn text-white p-1" type="button" onclick="plusQtd()">
                            <div class="d-flex flex-wrap justify-content-center">
                                <i class="bi bi-plus-circle-fill" style="color: #FA6699;"></i>
                            </div>
                        </a>
                    </div>

                    <div class="py-3">
                        <a class="btn text-white btn-lg btn-block w-100" id="btnAddBag" type="button"
                            onclick="addBag()">
                            <div class="d-flex flex-wrap justify-content-center">
                                <i class="bi bi-bag-plus-fill" style="background-color: #FA6699; font-size:1rem;"> CARRINHO</i>
                            </div>
                        </a>
                    </div>

                    <div class="fs-13 p-2">
                        {{ $product->description}}
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
