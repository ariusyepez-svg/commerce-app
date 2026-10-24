<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h3>Productos - Create!</h3>
    <form name="" method="post" action="{{ route('productos.store') }}">
        @csrf
        Nombre: <input type="text" name="nombre"/> <br>
        Marca: <input type="text" name="marca"/> <br>
        Precio: <input type="number" name="precio" step="any"/> <br>
        Fecha de vencimiento: <input type="date" name="fvencimiento"/> <br>
        Stock: <input type="number" name="stock"/> <br><br>

        <button type="submit">Save</button>
        <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancel</button>
    </form>
</body>
</html>