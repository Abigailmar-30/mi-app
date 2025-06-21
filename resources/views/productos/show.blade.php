@extends("plantilla")

@section("title","Producto")

@section("content")
<h2>Formulario de Producto</h2>
    <form>
        <label>Nombre del producto:</label>
        <input type="text" name="nombre"><br>

        <label>Precio:</label>
        <input type="number" name="precio"><br>

        <button type="submit">Guardar</button>
    </form>
@endsection