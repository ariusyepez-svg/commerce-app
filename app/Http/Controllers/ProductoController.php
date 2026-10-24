<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
// Importamos obligatoriamente el Form Request que creamos en el Paso 1
use App\Http\Requests\CreateProductoRequest;

class ProductoController extends Controller
{
    // 1. Listar productos con cálculo de totales para la tabla
    public function index_GET()
    {
        $productosDb = Producto::all();

        $totalPrecio = $productosDb->sum('precio');
        $totalStock = $productosDb->sum('stock');

        return view("productos.index", compact('productosDb', 'totalPrecio', 'totalStock'));
    }

    // 2. Mostrar formulario de creación
    public function create_GET() 
    {
        return view('productos.create');
    }

    // 3. Registro por asignación masiva usando el Form Request (Pág. 8)
    public function store_POST(CreateProductoRequest $request)
    {
        Producto::create($request->all());
        return redirect('/productos');
    }

    // 4. Mostrar formulario de edición
    public function edit_GET(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // 5. Actualización usando el mismo Form Request validado (Pág. 5)
    public function update_PUT(Producto $producto, CreateProductoRequest $request)
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
