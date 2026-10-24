<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit</title>
</head>
<body>
    <h3>Producto - Edit!</h3>
    <form method="post" action="{{ route('productos.update', $producto) }}">
        @csrf
        @method('put')

        Producto ID: <input type="text" name="producto_id" value="{{ $producto->producto_id }}" readonly="true"/> <br>
        
        Nombre: <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}"/> 
        @error('nombre') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Marca: <input type="text" name="marca" value="{{ old('marca', $producto->marca) }}"/> 
        @error('marca') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Precio: <input type="number" name="precio" step="any" value="{{ old('precio', $producto->precio) }}"/> 
        @error('precio') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Fecha de vencimiento: <input type="date" name="fvencimiento" value="{{ old('fvencimiento', $producto->fvencimiento) }}"/> 
        @error('fvencimiento') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Stock: <input type="number" name="stock" value="{{ old('stock', $producto->stock) }}"/> 
        @error('stock') <span style="color: red;">{{ $message }}</span> @enderror <br><br>

        <button type="submit">Save</button>
        <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancel</button>
    </form>
</body>
</html>
