<?php

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

// Ruta Página Principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta Dashboard
Route::get('admin/dashboard', 'Dashboard@index')->name('admin/dashboard');

// Rutas CRUD
/* Crear */
Route::get('admin/jugos/crear', 'JugosController@crear')->name('admin/jugos/crear');
Route::put('admin/jugos/store', 'JugosController@store')->name('admin/jugos/store');

/* Leer */
Route::get('admin/jugos', 'JugosController@index')->name('admin/jugos');

/* Actualizar */
Route::get('admin/jugos/actualizar/{id}', 'JugosController@actualizar')->name('admin/jugos/actualizar');
Route::put('admin/jugos/update/{id}', 'JugosController@update')->name('admin/jugos/update');

/* Eliminar */
Route::put('admin/jugos/eliminar/{id}', 'JugosController@eliminar')->name('admin/jugos/eliminar');