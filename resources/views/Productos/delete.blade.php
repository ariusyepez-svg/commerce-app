<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete</title>
</head>
<body>
    <h3>Producto - Delete!</h3>
    <form name="" method="post" action="{{ route('productos.destroy', $producto) }}">
        @csrf
        @method('delete')
        @method('put') 
       
        
    
        Producto ID: <input type="text" name="producto_id" value="{{ $producto->producto_id }}" readonly="true"/> <br>
        Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}" readonly="true"/> <br>
        <p>¿Está seguro de eliminar este producto?</p>
       

        <button type="submit">Si, borrarss</button>
        <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancelar</button>
    </form>
</body>
</html>