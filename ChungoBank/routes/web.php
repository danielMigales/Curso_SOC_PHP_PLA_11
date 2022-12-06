<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargaVistasController;

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

Route::get('/', [CargaVistasController::class, 'gestion'])->name('gestion');
Route::get('/altaMtoPuntos', [CargaVistasController::class, 'altaMtoPuntos']);
Route::get('/altaPersonas', [CargaVistasController::class, 'altaPersonas']);

Route::get('/altaMovimientos', [CargaVistasController::class, 'altaMovimientos']);
Route::get('/consultaMovimientos', [CargaVistasController::class, 'consultaMovimientos']);
Route::get('/detalleMovimiento', [CargaVistasController::class, 'detalleMovimiento']);

Route::get('/personas/{nif?}', [PersonasController::class, 'consulta'])->name('personas.consulta');
Route::post('/personas', [PersonasController::class, 'alta'])->name('personas.alta');