<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalidadesController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/
route::get('localidades',[LocalidadesController::class,'index'])->name('localidad.index');
route::get('localidades/create',[LocalidadesController::class,'create'])->name('localidad.create');

route::post('localidades',[LocalidadesController::class,'store'])->name('localidad.store');
route::get('localidades/{id}',[LocalidadesController::class,'show'])->name('localidad.show');
route::delete('localidades/{id}',[LocalidadesController::class,'destroy'])->name('localidad.destroy');
route::get('localidades/edit/{id}',[LocalidadesController::class,'edit'])->name('localidad.edit');
route::put('localidades/{id}',[LocalidadesController::class,'update'])->name('localidad.update');

//JUGADORES

route::get('jugadores',[JugadoresController::class,'index'])->name('jugador.index');
route::get('jugadores/create',[JugadoresController::class,'create'])->name('jugador.create');

route::post('jugadores',[JugadoresController::class,'store'])->name('jugador.store');
route::get('jugadores/{id}',[JugadoresController::class,'show'])->name('jugador.show');
route::delete('jugadores/{id}',[JugadoresController::class,'destroy'])->name('jugador.destroy');
route::get('jugadores/edit/{id}',[JugadoresController::class,'edit'])->name('jugador.edit');
route::put('jugadores/{id}',[JugadoresController::class,'update'])->name('jugador.update');

//EQUIPOS

route::get('equipos',[EquiposController::class,'index'])->name('equipo.index');
route::get('equipos/create',[EquiposController::class,'create'])->name('equipo.create');

route::post('equipos',[EquiposController::class,'store'])->name('equipo.store');
route::get('equipos/{id}',[EquiposController::class,'show'])->name('equipo.show');
route::delete('equipos/{id}',[EquiposController::class,'destroy'])->name('equipo.destroy');
route::get('equipos/edit/{id}',[EquiposController::class,'edit'])->name('equipo.edit');
route::put('equipos/{id}',[EquiposController::class,'update'])->name('equipo.update');

//INICIO

route::get("/",[LandingController::class,"index"])->name('landing.index');
