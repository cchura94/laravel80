@extends("layouts.admin")

@section("contenedor")

<h1>Lista de Servicios</h1>
<a href="{{ url('/admin/servicios/crear') }}" class="btn btn-primary">Nuevo Servicio</a>

<table class="table table-striped table-hover">
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>TIPO</td>
        <td>DESCRIPCION</td>
        <td>ACCIONES</td>
    </tr>
    @foreach($servicios as $serv)
    <tr>
        <td>{{ $serv->id }}</td>
        <td>{{ $serv->nombre }}</td>
        <td>{{ $serv->tipo }}</td>
        <td>{{ $serv->descripcion }}</td>
        <td>

        </td>
    </tr>
    @endforeach
</table>

@endsection