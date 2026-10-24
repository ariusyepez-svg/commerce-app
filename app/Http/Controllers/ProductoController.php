<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // 1. Listar productos calculando las sumas totales en tiempo real
    public function index_GET()
    {
        $productosDb = Producto::all();

        // Calculamos los totales dinámicamente desde la colección
        $totalPrecio = $productosDb->sum('precio');
        $totalStock = $productosDb->sum('stock');

        return view("productos.index", compact('productosDb', 'totalPrecio', 'totalStock'));
    }

    // 2. Mostrar formulario de creación
    public function create_GET() 
    {
        return view('productos.create');
    }

    // 3. Registro por asignación masiva (Formato del profesor)
    public function store_POST(Request $request)
    {
        Producto::create($request->all());
        return redirect('/productos');
    }

    // 4. Mostrar formulario de edición
    public function edit_GET(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // 5. Actualización por asignación masiva (Formato del profesor)
    public function update_PUT(Producto $producto, Request $request)
    {
        $producto->update($request->all());
        return redirect('/productos');
    }

    // 6. Eliminar producto de la base de datos
    public function destroy_DELETE(Producto $producto)
    {
        $producto->delete();
        return redirect('/productos');
    }

    // 7. Mostrar informe detallado del producto
    public function show_GET(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }
}
