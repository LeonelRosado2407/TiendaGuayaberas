<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\shop\CarritoController;
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
    return view('pages.home.home');
});

Route::get('/produc', function () {
    return view('pages.shop.productoslist');
});

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::resource('productos', ProductosController::class)->names('productos');

Route::get("/micarrito",[CarritoController::class, "mostrarcarrito"])->name('carrito');


Route::get("/listado/productos",[CarritoController::class, "mostrarproductos"])->name('listaproducto');


