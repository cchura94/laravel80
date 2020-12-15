@extends("layouts.admin")

@section("contenedor")

<h1>Editar Servicio</h1>

<form action="/admin/servicios/{{ $servicio->id }}" method="post">
    @csrf
    @Method('PUT')
    <label for="">Nombre:</label>
    <input type="text" name="nombre" class="form-control" value="{{ $servicio->nombre }}">

    <label for="">Tipo:</label>
    <input type="text" name="tipo" class="form-control" value="{{ $servicio->tipo }}">

    <label for="">Descricion:</label>
    <input type="text" name="descripcion" class="form-control" value="{{ $servicio->descripcion }}">

    <input type="submit" class="btn btn-success" value="Modificar">

</form>

@endsection