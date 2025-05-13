<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contact', [EventController::class, 'contact']);

Route::get('/produtos', [EventController::class, 'products']);

Route::get('/produtos_teste/{id?}', [EventController::class, 'product_test']);
