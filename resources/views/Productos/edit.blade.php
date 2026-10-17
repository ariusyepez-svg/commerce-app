<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
     <div style="text-align: center; margin: 15px 0px; font-size: 22px;">
        <b>¡Productos - Editar!</b>
    </div>
    <form name="" method="post" action="{{ route('productos.update', $producto->producto_id) }}">
        @csrf 
        @method('PUT')
        Producto ID: <input type="text" name="producto_id" value="{{ $producto->producto_id }}"><br>
        Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>
        Marca: <input type="text" name="marca" value="{{ $producto->marca }}"/><br>
        Precio: <input type="number" name="precio" step="any" value="{{ $producto->precio }}"><br>
        Fecha de vencimiento: <input type="date" name="fvencimiento" value="{{ $producto->fvencimiento }}"><br>
        Stock: <input type="number" name="stock" value="{{ $producto->stock }}"/><br><br>

        <button type="submit">Guardar</button>
        <butto type="button" onclick="location.href='{{ url('/productos') }}">Cancelar</butto>
    </form>
</body>
</html>