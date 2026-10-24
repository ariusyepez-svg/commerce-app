<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>

    <style>
        table {
            width: 70%;
            margin: 0px auto;
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
        }        
        .total-row {
            background-color: #f9f9f9;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div style="text-align: center; margin: 15px 0px; font-size: 22px;">
        <b>¡Productos - Listar!</b>
    </div>
    
    <div style="margin: 10px 0px; text-align: center;">
        <a href="{{ url('/productos/create') }}" style="font-size: 16px; font-weight: bold; text-decoration: none; color: #007bff;">[ + Nuevo Producto ]</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>F.Vencimiento</th>
                <th>Stock</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productosDb as $producto)
            <tr>
                <td style="text-align: center;">{{ $producto->producto_id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->marca }}</td>
                <td style="text-align: right;">{{ $producto->precio }}</td>
                <td style="text-align: center;">{{ $producto->fvencimiento }}</td>
                <td style="text-align: right;">{{ $producto->stock }}</td>
                <td style="text-align: center;">
                    <a href="{{ route('productos.show', $producto) }}" style="text-decoration: none; color: #28a745; margin-right: 5px;">Detalle</a>
                    <span style="color: #ccc;">|</span>
                    <a href="{{ route('productos.edit', $producto) }}" style="text-decoration: none; color: #007bff; margin-left: 5px; margin-right: 5px;">Editar</a>
                    <span style="color: #ccc;">|</span>
                    <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                        @csrf
                        @method('delete')
                        <button type="submit" style="color: red; background: none; border: none; padding: 0; cursor: pointer; font-family: inherit; font-size: inherit; text-decoration: underline; margin-left: 5px;">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="total-row">
                <td colspan="3" style="text-align: right;"><b>Total:</b></td>
                <td style="text-align: right;">{{ $totalPrecio }}</td>
                <td></td>
                <td style="text-align: right;">{{ $totalStock }}</td>
                <td></td>
            </tr>
        </tfoot>
    </table>

</body>
</html>
