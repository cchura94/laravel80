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
            <a href="/admin/servicios/{{ $serv->id }}/editar" class="btn btn-warning btn-xs">editar</a>

            <form action="/admin/servicios/{{ $serv->id }}" method="post">
                @csrf
                @Method("DELETE")
                <input type="submit" value="eliminar" class="btn btn-danger btn-xs">
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection