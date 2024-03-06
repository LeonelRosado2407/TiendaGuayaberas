<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use App\Models\carrito;
use Illuminate\Http\Request;
use App\Http\Controllers\shop\ProductosController;

class CarritoController extends Controller
{
    //
    public function mostrarcarrito(){
        
        $micarrito = Carrito::all();

        dd($micarrito);

        return view('pages.shop.carrito');
    }

    public function mostrarproductos(){

        $productos = Productos::all();
        $productoController = new ProductosController();
        foreach ($productos as $producto) {
            $productoImg = $productoController->getImage($producto);
            dd($productoImg);
            $producto->foto = $productoImg->foto;
        }
        dd($productos);
        return view('pages.shop.productoslist', $productos);
    }

    public function agregarcarrito(){

        return view('pages.Home.home');
    }



}
