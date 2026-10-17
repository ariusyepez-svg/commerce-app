<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function index_GET() 
    {
        $baraja=Producto::all();
        return view('productos.index',compact('baraja'));
    }

    public function create_GET()
    {
        return view('productos.create');
    }

    public function store_POST(Request $request)
    {
        $producto=new Producto();
    $producto->nombre=$request->nombre;
    $producto->marca=$request->marca;
    $producto->precio=$request->precio;
    $producto->fvencimiento=$request->fvencimiento;
    $producto->stock=$request->stock;
    $producto->save();

    return redirect('/productos');

    }
    public function edit_GET(Producto $producto)
    {
        return view('productos.edit',compact('product'));
    }

    public function update_PUT(Producto $producto,Request $request)
    {
        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->fvencimiento=$request->fvencimiento;
        $producto->stock=$request->stock;
        $producto->save();

        return redirect('/productos');
    }
}
