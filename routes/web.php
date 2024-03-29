<?php

use App\Http\Controllers\shop\ProductosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('pages.example');
});

Route::get('/home', function () {
    return view('pages.home.home');
});

Route::get('/career', function () {
    return view('pages.Shop.carrito');
});

Route::get('/listado', function () {
    return view('pages.Productos.listado');
});


Route::resource('productos', ProductosController::class)->names('productos');


