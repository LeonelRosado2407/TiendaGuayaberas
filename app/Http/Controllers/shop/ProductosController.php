<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Productos = Productos::all();
        foreach ($Productos as $producto) {
            $productoWithImage = $this->getImage($producto);
            $producto->foto = $productoWithImage->foto;
        }
        return view('pages.Productos.listado',[
            'Productos' => $Productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producto = new Productos();
        return view('pages.Productos.formulario',[
            'producto' => $producto
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $producto = new Productos();
            $producto->nombre = $data['nombre'];
            $producto->descripcion = $data['descripcion'];
            $producto->precio = $data['precio'];
            $producto->talla = $data['talla'];
            $producto->stock = $data['stock'];
        
            if ($request->has('imgProducto')) {
                $file = $request->imgProducto;
                $name = uniqid().'.'.$file->getClientOriginalExtension();
                $file->storeAs('images/Productos/', $name, 'public');
                $producto->foto = "images/Productos/".$name;
            }

            
            $isCreated = $producto->save();
            if ($isCreated) {
                return redirect()->route('productos.index')->with('message', 'Producto creado correctamente');
            } else {
                return redirect()->route('productos.index')->with('message', 'Error al crear el producto');
            }
        } catch (\Exception $e) {
            return redirect()->route('productos.index')->with('message', 'Error al crear el producto');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getImage($producto) : Productos{
        // dd($producto);
        if ($producto->foto != null) {
            $path = $producto->foto;
            $extension = explode('.', $path);
            $imageData = Storage::disk('public')->get($path);
            $base64Image = base64_encode($imageData);
            $base64Image = 'data:image/' . $extension[1] . ';base64,' . $base64Image;
            // Asignar la imagen codificada al objeto producto
            $producto->foto = $base64Image;
        }else{
            $path = public_path('img\default.png');
            $extension = explode('.', $path);
            $imageData = File::get($path);
            $base64Image = base64_encode($imageData);
            $base64Image = 'data:image/' . $extension[1] . ';base64,' . $base64Image;
            // Asignar la imagen codificada al objeto producto
            $producto->foto = $base64Image;
        }
        return $producto;
    }
}
