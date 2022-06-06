<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


//VIEW PRINCIPAL
Route::get('/', function () {
    return view('home');
});

Route::get('/checkout', function () {
    return view('checkout');
});

//ADICIONAR NO CARRINHO DE COMPRAS
Route::get('/shoppings/add/{id}/bag/{qtd}', function($id, $qtd)
{

    $product = Product::find($id);
    $session = session('shoppings_list');

    $product_formated = [
        "id" => $product->id,
        "name" => $product->name,
        "code" => $product->code,
        "value_av" => ((float)$product->value_av*$qtd),
        "value_ap" => ((float)$product->value_ap*$qtd),
        "qtd" => $qtd
    ];

    if($session == null){
        $session = [];
        array_unshift($session, $product_formated);
    }else{
        array_push($session, $product_formated);
    }

    Session::put('shoppings_list', $session);
    return view('products.product', ['product' => $product]);
});

//REMOVER CARRINHO DE COMPRAS
Route::get('/shoppings/{idProduct}/remove/{idCart}', function($idProduct,$idCart)
{
    $product = Product::find($idProduct);

    $session = session('shoppings_list');
    $session = array_values($session);
    for($i=0; $i < count($session); $i++){
        if($session[$i]["id"] == $idCart){
            unset($session[$i]);
            $session = array_values($session);
        }
    }

    session()->forget('shoppings_list');
    Session::put('shoppings_list', $session);

    return view('products.product', ['product' => $product]);
});


// CONTROLERS
Route::resource('/rings', RingController::class);
Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);



