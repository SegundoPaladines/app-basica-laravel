<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorUdenar;
use App\Http\Controllers\ControladorEstudiantes;
use App\Http\Controllers\ControladorDocentes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//vista principal
Route::get('/', [ControladorUdenar::class, 'mostrarVistaPrincipal']);
Route::get('/facultades', [ControladorUdenar::class, 'mostrarFacultades']);
Route::get('/facultades/ingenieria', [ControladorUdenar::class, 'mostrarFacing']);
Route::get('/facultades/ingenieria/sistemas', [ControladorUdenar::class, 'mostrarSistemas']);
Route::get('/facultades/ingenieria/electronica', [ControladorUdenar::class, 'mostrarElec']);
Route::get('/facultades/ingenieria/civil', [ControladorUdenar::class, 'mostrarCivil']);
Route::get('/docentes', [ControladorDocentes::class, 'mostrarVistaDocentes']);
Route::get('/estudiantes', [ControladorEstudiantes::class, 'mostrarVistaEstudiantes']);