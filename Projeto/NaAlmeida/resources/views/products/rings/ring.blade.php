@extends('app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 align-items-stretch py-3">
        <div class="col-sm-8 row row-cols-1 ">
            <img src="{{ asset('images/image04.jpg') }}" alt="image03" width="100%">
            <div style="background-color: black ;">
                <img src="" alt="">
            </div>
            <div style="background-color: pink;">
                <img src="" alt="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="fs-2 py-2">{{ $ring->name }}</div>
            <form action="">
                <div class="px-4">
                <label for="qtd" class="fs-6">QTD</label>
                <input type="text" name="qtd" id="qtd" value="1" class="inputQTD">
                </div>

                <div class="d-flex flex-column px-4 py-2 justify-content-start">
                    <div class="fs-4">R$ {{ $ring->value }}.00 av</div>
                    <div class="fs-7 ">R$ {{ ($ring->value) * 1.1 }}0 ap</div>
                </div>

                <div class="fs-13 p-2">
                    {{ $ring->description}}
                </div>

                <div class="py-2">
                <a class="btn text-white btn-lg btn-block w-100" id="btnAddBag" type="button">
                    <div class="d-flex flex-wrap justify-content-center">
                        <i class="bi bi-bag-heart-fill" style="background-color: #FA6699;">  CARRINHO</i>
                    </div>
                </a>
                </div>



            </form>


        </div>
    </div>
</div>

@endsection
