<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get("/saludo", function () {
    echo "hola desde las rutas de Laravel";
});

Route::get("/saludo2", function () {
    return "Otro saludo de Laravel";
});

Route::get("/nombres", function () {
    return ["Juan", "cristian", "Ana", "Maria"];
});

Route::get("/nombre/{n}", function ($nom) {
    return ["nombre" => $nom];
});

Route::get("/nombre/{n}/edad/{ed}", function ($nom, $edad) {
    return ["nombre" => $nom, "edad" => $edad];
});

Route::get("/docs/{version}/installation", function ($ver) {
    echo " Estas viendo la version $ver";
});

Route::get("/contacto", function () {

    return view("contactenos");
});

Route::prefix('admin')->group(function () {

    Route::get("/servicios", [ServicioController::class, "listar"])->name("lista_servicios");
    Route::get("/servicios/crear", [ServicioController::class, "crear"]);
    Route::get("/servicios/{servicio}", [ServicioController::class, "mostrar"]);
    Route::get("/servicios/{servicio}/editar", [ServicioController::class, "editar"]);
    Route::post("/servicios", [ServicioController::class, "guardar"]);
    Route::put("/servicios/{id}", [ServicioController::class, "modificar"]);
    Route::delete("/servicios/{id}", [ServicioController::class, "eliminar"]);

    Route::resource("/categoria", CategoriaController::class);
});
