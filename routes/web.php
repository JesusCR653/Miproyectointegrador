<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\RecordatoriosController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\HistorialMedicoController;
use App\Http\Controllers\ArchivosAdjuntosController;
use App\Http\Controllers\CartillaVacunacionController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\ClientesController;


Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/inicio', function () {
    return view('AuthViews.InicioSesion');
});
*/

//TABLAS

Route::get('/usuarios',[UsuariosController::class, 'Usuarios']);
Route::get('/mascotas',[MascotasController::class, 'Mascotas']);
Route::get('/recordatorios',[RecordatoriosController::class, 'Recordatorios']);
Route::get('/citas', [CitasController::class, 'Citas']);
Route::get('/comentarios', [ComentariosController::class, 'Comentarios']);
Route::get('/galeria', [GaleriaController::class, 'Galeria']);
Route::get('/historial-medico', [HistorialMedicoController::class, 'HistorialMedico']);
Route::get('/archivos-adjuntos', [ArchivosAdjuntosController::class, 'ArchivosAdjuntos']);
Route::get('/cartilla-vacunacion', [CartillaVacunacionController::class, 'CartillaVacunacion']);



Route::get('/inicio/registro', function () {
    return view('RegisterViews.registrarusuario');
});

Route::get('/inicio/recuperar', function () {
    return view('ResetPasswordViews.recuperarcontrasennia');
});

Route::get('/miinterfaz',[SesionController::class, 'MiInterfaz'])->name('miinterfaz');
Route::get('/login',[SesionController::class, 'Mylogin'])->name('login');
Route::post('/loginpost',[SesionController::class, 'InicioSesion'])->name('loginpost');


//CRUDS

Route::prefix('inicio')->group(function () {
    Route::get('/',[ClientesController::class, 'inicio'])->name('clientes.index');
    Route::get('/vistacrear',[ClientesController::class, 'vistacrear'])->name('clientes.vista');
    Route::post('/guardarcliente',[ClientesController::class, 'guardarcliente'])->name('clientes.guardar');
    Route::get('/buscarcliente',[ClientesController::class, 'buscar'])->name('clientes.buscar');
    Route::get('/{id}/vistaeditar',[ClientesController::class, 'vistaeditar'])->name('clientes.vistaeditar');
    Route::get('/{id}/editarcliente',[ClientesController::class, 'editarcliente'])->name('clientes.editar');
    Route::put('/{id}/actualizarcliente',[ClientesController::class, 'actualizarcliente'])->name('clientes.actualizar');
    Route::delete('/{id}/eliminarcliente',[ClientesController::class, 'eliminarcliente'])->name('clientes.eliminar');
});

Route::prefix('usuarios')->group(function () {
    Route::get('/vistacrear',[UsuariosController::class, 'vistacrear'])->name('usuarios.vista');
    Route::post('/guardarusuario',[UsuariosController::class, 'guardarusuario'])->name('usuarios.guardar');
    Route::get('/buscarusuario',[UsuariosController::class, 'buscar'])->name('usuarios.buscar');
    Route::get('/{id}/vistaeditar',[UsuariosController::class, 'vistaeditar'])->name('usuarios.vistaeditar');
    Route::get('/{id}/editarusuario',[UsuariosController::class, 'editarusuario'])->name('usuarios.editar');
    Route::put('/{id}/actualizarusuario',[UsuariosController::class, 'actualizarusuario'])->name('usuarios.actualizar');
    Route::delete('/{id}/eliminarusuario',[UsuariosController::class, 'eliminarusuario'])->name('usuarios.eliminar');
});
