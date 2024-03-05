<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    //
    public function mostrarcarrito(){
        

        return view('pages.shop.carrito');
    }

    public function mostrarproductos(){

        $productos = Productos::all();

        dd($productos);
        return view('pages.shop.productoslist', $productos);
    }



}
