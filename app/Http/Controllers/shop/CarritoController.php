<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use App\Models\carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        
        foreach ($productos as $producto) {
            $producto->foto = $this->getImage($producto->id_producto);
        }

        return view('pages.shop.productoslist', $productos);
    }

    public function getImage($id){
        $producto = Productos::where('id_producto',$id)->first();
        if ($producto != null) {
            $path = $producto->foto;
            $extension = explode('.',$path)[1];
            $imagenUrl = Storage::disk('public')->get($path);
            if ($imagenUrl != null) {
                $imagenUrl = 'data:image/'.$extension.';base64,'.base64_encode($imagenUrl);
            }
            else{
                $imagenUrl = asset('images/default.png');
                $extension = 'png';
                $imagenUrl = 'data:image/'.$extension.';base64,'.base64_encode($imagenUrl);
            }
        }else{
            $imagenUrl = asset('images/default.png');
            $extension = 'png';
            $imagenUrl = 'data:image/'.$extension.';base64,'.base64_encode($imagenUrl);
        }

        return $imagenUrl;
    }



}
