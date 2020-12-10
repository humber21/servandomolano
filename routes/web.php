<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AnunciosController;
use App\Http\Controllers\usuariosController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[InicioController::class,'MostrarPagInicio'])->name('paginaWelcome');
//Rutas de control de la paginaweb
Route::get('/anuncios',[AnunciosController::class,'MostrarPagAnuncios'])->name('paginaAnuncios');
Route::get('/anuncios/{id}',[AnunciosController::class,'MostrarAnuncio'])->name('MostrarAnuncio');
Route::post('/anuncios/publicar',[AnunciosController::class,'PublicarAnuncio'])->name('PublicarAnuncio');
//Ruta para editar una publicacion
Route::post('/anuncios/editar{id}',[AnunciosController::class,'EditarAnuncio'])->name('EditarAnuncio');
Route::get('/carreras/agricultura',[InicioController::class,'MostrarPagAgricultura'])->name('paginaAgricultura');
Route::get('/carreras/informatica',[InicioController::class,'MostrarPagInformatica'])->name('paginaInformatica');
Route::get('/carreras/conservacion',[InicioController::class,'MostrarPagConservacion'])->name('paginaConservacion');
//rutas de la pagina
Route::get('/usuarios',[usuariosController::class,'MostrarPaginaUsuarios'])->name('paginaUsuarios');

Route::get('/anuncios/eliminar/{id}',[AnunciosController::class,'EliminarAnuncio'])->name('EliminarAnuncio');

//
Route::get('/usuario/eliminar/{id}',[UsuariosController::class,'EliminarUsuario'])->name('EliminarUsuario');
Route::post('/usuario/editarr/{id}',[UsuariosController::class,'EditarUsuario'])->name('EditarUsuario');
Route::post('/usuarios/agregar',[UsuariosController::class,'AgregarUsuario'])->name('AgregarUsuario');

//Vista 
Route::view('/calendario','calendario')->name('calendario');
