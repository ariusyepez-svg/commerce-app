<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <div style="text-align: center; margin: 15px 0px; font-size: 22px;">
        <b>¡Productos - Registrar!</b>
    </div>
    <form name="" method="@post" action="{{ route('productos.store') }}">
        @csrf 
        Nombre: <input type="text" name="nombre"><br>
        Marca: <input type="text" name="marca"/><br>
        Precio: <input type="number" name="precio" step="any"><br>
        Fecha de vencimiento: <input type="date" name="fvencimiento"><br>
        Stock: <input type="number" name="stock"/><br><br>

        <button type="submit">Guardar</button>
        <butto type="button" onclick="location.href='{{ url('/productos') }}">Cancelar</butto>
    </form>
</body>
</html>