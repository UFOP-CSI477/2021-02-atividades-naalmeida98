<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


//VIEW PRINCIPAL
Route::get('/', function () {
    return view('home');
});

Route::get('/shoppings/id', function($id)
{
    
    Session::flush();
    $product = Product::find($id);

    $session = session('shoppings_list');

    $product_formated = [
        "id" => $product->code,
        "name" => $product->name,
        "code" => $product->code,
        "value_av" => (float)$product->value_av,
        "value_ap" => (float)$product->value_ap,
        // "qtd" => $qtd
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



// CONTROLERS
Route::resource('/rings', RingController::class);
Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);



