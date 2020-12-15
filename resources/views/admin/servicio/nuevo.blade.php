@extends("layouts.admin")

@section("contenedor")

<h1>Crear Nuevo Servicio</h1>

<form action="/admin/servicios" method="post">
    @csrf
    <label for="">Nombre:</label>
    <input type="text" name="nombre" class="form-control">

    <label for="">Tipo:</label>
    <input type="text" name="tipo" class="form-control">

    <label for="">Descricion:</label>
    <input type="text" name="descripcion" class="form-control">

    <input type="submit" class="btn btn-success">

</form>

@endsection