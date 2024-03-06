<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use App\Models\carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
            if ($producto->foto != null) {
                $path = $producto->foto;
                $extension = explode('.', $path);
                $imageData = Storage::disk('public')->get($path);

                if ($imageData == null) {
                    $path = public_path('img/default.png');
                    $extension = "png";
                    $imageData = File::get($path);
                }
                
                $base64Image = base64_encode($imageData);
                $base64Image = 'data:image/' . $extension[1] . ';base64,' . $base64Image;
                // Asignar la imagen codificada al objeto producto
                $imagenUrl= $base64Image;
        
            }else{
                $path = public_path('img\default.png');
                $extension = explode('.', $path);
                $imageData = File::get($path);
                $base64Image = base64_encode($imageData);
                $base64Image = 'data:image/' . $extension[1] . ';base64,' . $base64Image;
                // Asignar la imagen codificada al objeto producto
                $imagenUrl = $base64Image;
            }
        }

        return $imagenUrl;
    }



}
