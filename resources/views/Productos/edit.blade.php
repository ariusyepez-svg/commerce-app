<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <h3>Producto - Edit!</h3>
    <form name="" method="post" action="{{ route('productos.update', $producto) }}">
        @csrf
        @method('put') {{-- Directiva obligatoria para simular el método PUT --}}

        {{-- Al usar MySQL Workbench tu llave es producto_id --}}
        Producto ID: <input type="text" name="producto_id" value="{{ $producto->producto_id }}" readonly="true"/> <br>
        Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}"/> <br>
        Marca: <input type="text" name="marca" value="{{ $producto->marca }}"/> <br>
        Precio: <input type="number" name="precio" step="any" value="{{ $producto->precio }}"/> <br>
        Fecha de vencimiento: <input type="date" name="fvencimiento" value="{{ $producto->fvencimiento }}"/> <br>
        Stock: <input type="number" name="stock" value="{{ $producto->stock }}"/> <br><br>

        <button type="submit">Save</button>
        <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancel</button>
    </form>
</body>
</html>
