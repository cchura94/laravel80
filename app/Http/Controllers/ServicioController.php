<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    public function listar()
    {
        $servicios = DB::select("select * from servicios");
        return view("admin.servicio.listar", compact('servicios'));
    }

    public function crear()
    {
        // cargar o mostrar el formulario
        return view("admin.servicio.nuevo");
    }

    public function guardar(Request $request)
    {
        DB::table("servicios")->insert([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion
        ]);
        return redirect("/admin/servicios");
    }

    public function mostrar($serv)
    {
        return view("admin.servicio.mostrar");
    }

    public function editar($serv)
    {
        // buscamos el servicio a editar
        $servicio = DB::table("servicios")->find($serv);
        // cargar o mostrar el formulario de edicion de un recurso
        return view("admin.servicio.editar", compact("servicio"));
    }

    public function modificar($id, Request $request)
    {
        $fila = DB::table('servicios')
            ->where('id', $id)
            ->update([
                'nombre' => $request->nombre,
                'tipo' => $request->tipo,
                'descripcion' => $request->descripcion
            ]);
        return redirect("/admin/servicios");
    }

    public function eliminar($id)
    {
        DB::table('servicios')->where('id', '=', $id)->delete();
        return redirect("/admin/servicios");
    }
}
