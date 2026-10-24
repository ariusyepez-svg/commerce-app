<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>create</title>
</head>
<body>
    <h3>Producto - Create!</h3>
    <form method="post" action="{{ route('productos.store') }}">
        @csrf
        
        Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}"/> 
        @error('nombre') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Marca: <input type="text" name="marca" value="{{ old('marca') }}"/> 
        @error('marca') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Precio: <input type="number" name="precio" step="any" value="{{ old('precio') }}"/> 
        @error('precio') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Fecha de vencimiento: <input type="date" name="fvencimiento" value="{{ old('fvencimiento') }}"/> 
        @error('fvencimiento') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Stock: <input type="number" name="stock" value="{{ old('stock') }}"/> 
        @error('stock') <span style="color: red;">{{ $message }}</span> @enderror <br><br>

        <button type="submit">Save</button>
        <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancel</button>
    </form>
</body>
</html>
