<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Heitor"; 
    $idade = 20;

    return view('welcome', ['nome' => $nome], ['idade' => $idade]);
});
