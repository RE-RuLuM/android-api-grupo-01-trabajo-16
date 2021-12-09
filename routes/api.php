<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/estancias', [\App\Http\Controllers\EstanciaController::class, 'index'])->name('estancia.index');
Route::get('/estancias/{id}', [\App\Http\Controllers\EstanciaController::class, 'show'])->name('estancia.show');
Route::post('/estancias', [\App\Http\Controllers\EstanciaController::class, 'store'])->name('estancia.store');
Route::put('/estancias/{id}', [\App\Http\Controllers\EstanciaController::class, 'update'])->name('estancia.update');

Route::get('/hoteles', [\App\Http\Controllers\HotelController::class, 'index'])->name('hotel.index');
Route::get('/hoteles/{id}', [\App\Http\Controllers\HotelController::class, 'show'])->name('hotel.show');
Route::post('/hoteles', [\App\Http\Controllers\HotelController::class, 'store'])->name('hotel.store');
Route::put('/hoteles/{id}', [\App\Http\Controllers\HotelController::class, 'update'])->name('hotel.update');


Route::get('/sucursales', [\App\Http\Controllers\SucursalController::class, 'index'])->name('sucursal.index');
Route::get('/sucursales/{id}', [\App\Http\Controllers\SucursalController::class, 'show'])->name('sucursal.show');
Route::post('/sucursales', [\App\Http\Controllers\SucursalController::class, 'store'])->name('sucursal.store');
Route::put('/sucursales/{id}', [\App\Http\Controllers\SucursalController::class, 'update'])->name('sucursal.update');

Route::get('/turistas', [\App\Http\Controllers\TuristaController::class, 'index'])->name('turista.index');
Route::get('/turistas/{id}', [\App\Http\Controllers\TuristaController::class, 'show'])->name('turista.show');
Route::post('/turistas', [\App\Http\Controllers\TuristaController::class, 'store'])->name('turista.store');
Route::put('/turistas/{id}', [\App\Http\Controllers\TuristaController::class, 'update'])->name('turista.update');

Route::get('/viajes-contratados', [\App\Http\Controllers\ViajeContratadoController::class, 'index'])->name('viaje-contratado.index');
Route::get('/viajes-contratados/{id}', [\App\Http\Controllers\ViajeContratadoController::class, 'show'])->name('viaje-contratado.show');
Route::post('/viajes-contratados', [\App\Http\Controllers\ViajeContratadoController::class, 'store'])->name('viaje-contratado.store');
Route::put('/viajes-contratados/{id}', [\App\Http\Controllers\ViajeContratadoController::class, 'update'])->name('viaje-contratado.update');

Route::get('/vuelos', [\App\Http\Controllers\VueloController::class, 'index'])->name('vuelo.index');
Route::get('/vuelos/{id}', [\App\Http\Controllers\VueloController::class, 'show'])->name('vuelo.show');
Route::post('/vuelos', [\App\Http\Controllers\VueloController::class, 'store'])->name('vuelo.store');
Route::put('/vuelos/{id}', [\App\Http\Controllers\VueloController::class, 'update'])->name('vuelo.update');
