<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index_GET()
    {
        $productosDb = Producto::all();
        return view("productos.index", compact('productosDb')); // Formato de la guía
    }

    public function create_GET() {
        return view("productos.create");
    }

    public function store_POST(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->precio = $request->precio;
        $producto->fvencimiento = $request->fvencimiento;
        $producto->stock = $request->stock;
        $producto->save();

        return redirect('/productos');
    }

    // Recibe el objeto directamente según tu guía optimizada
    public function edit_GET(Producto $producto)
    {
        return view('productos.edit', compact('producto')); // Retorna la vista con los datos
    }

    // Procesa los cambios de la edición
    public function update_PUT(Producto $producto, Request $request)
    {
        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->precio = $request->precio;
        $producto->fvencimiento = $request->fvencimiento;
        $producto->stock = $request->stock;
        $producto->save();

        return redirect('/productos');        
        }
        public function delete_GET(Producto $producto)
        {
            return view('productos.delete', compact('producto'));
        }
        public function destroy_DELETE(Producto $producto)
        {
            $producto->delete();
            return redirect('/productos');
        }
}

