<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>

    
    <style>
        th, td {
            border: 1px solid;
            padding: 1px 5px;
        }        
    </style>
</head>
<body>
    <div style="text-align: center; margin: 15px 0px; font-size: 22px;">
        <b>¡Productos - Listar!</b>
    </div>
    <div>
        <div style="margin: 10px 0px">
           
            <a href="{{ url('/productos/create') }}">Nuevo</a>
        </div>
        <table style="width: 50%; margin: 0px auto; border: 1px solid;">
            <tr>
                <th><b>ID</b></th>
                <th><b>Nombre</b></th>
                <th><b>Marca</b></th>
                <th><b>Precio</b></th>
                <th><b>F.Vencimiento</b></th>
                <th><b>Stock</b></th>
                <th><b>Acción</b></th>
            </tr>
          
            @foreach ($baraja as $producto)
            <tr>
                <td>{{ $producto->producto_id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->marca }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->fvencimiento }}</td>
                <td>{{ $producto->stock }}</td>
                <td>
                   
                    <a href="{{ route('productos.edit', $producto) }}">Editar</a>  
                    <a href="{{ route('productos.delete', $producto) }}">Eliminar</a> |
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>