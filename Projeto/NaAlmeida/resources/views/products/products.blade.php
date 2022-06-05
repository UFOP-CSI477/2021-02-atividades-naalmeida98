@extends('app')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($products as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <a href="{{ route('products.show', $product->id) }}" >
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false">
                                <!-- <title>Placeholder</title> -->
                                <!-- <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text> -->
                            </img>
                        </a>

                        <div class="card-body">
                            <p class="card-text">{{ $product->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group" >
                                    <button type="button" style="border-color:#FA6699; background-color: #FA6699" class="btn btn-sm btn-outline-secondary" >
                                        <i class="bi bi-bag-plus-fill" style="background-color: #FA6699;"></i>
                                    </button>
                                    <!-- <a type="button" href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a> -->
                                </div>
                                <small class="text-muted">R$ {{ $product->value_av }},00</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



@endsection