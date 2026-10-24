<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del Producto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .card { border: 1px solid #ccc; padding: 20px; width: 40%; margin: 0px auto; box-shadow: 2px 2px 5px #eee; }
        .card-header { font-size: 20px; font-weight: bold; border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 15px; text-align: center; }
        .field { margin-bottom: 10px; font-size: 16px; }
        .label { font-weight: bold; color: #555; }
        .btn-back { display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #007bff; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">Informe Detallado del Producto</div>
        
        <div class="field"><span class="label">Producto ID:</span> {{ $producto->producto_id }}</div>
        <div class="field"><span class="label">Nombre:</span> {{ $producto->nombre }}</div>
        <div class="field"><span class="label">Marca:</span> {{ $producto->marca }}</div>
        <div class="field"><span class="label">Precio:</span> S/. {{ number_format($producto->precio, 2) }}</div>
        <div class="field"><span class="label">Fecha de Vencimiento:</span> {{ $producto->fvencimiento ?? 'No registra' }}</div>
        <div class="field"><span class="label">Stock Disponible:</span> {{ $producto->stock }} unidades</div>

        <a href="{{ url('/productos') }}" class="btn-back">[ Volver a la Lista ]</a>
    </div>

</body>
</html>
