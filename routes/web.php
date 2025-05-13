<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Heitor"; 
    $idade = 20;
    
    $arr = [1, 2, 3, 4, 5];

    $nomes = ["Matheus", "Maria", "João", "Saulo"];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/produtos', function () {
    
    $busca = request('search');  
    
    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
