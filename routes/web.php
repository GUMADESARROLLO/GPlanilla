<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Auth::routes();
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
Route::get('Home', 'EmployeeController@getHome')->name('Home');
Route::get('/', 'Auth\LoginController@showLoginForm')->name("Init");
Route::get('/logout', 'Auth\LoginController@logout');



// Route::post('GuardarInventario', 'InventarioController@postGuardarInventario')->name('GuardarInvent
// Route::post('postKardex', 'InventarioController@postKardex')->name('postKardex');
// Route::post('getKardex', 'InventarioController@getKardex')->name('getKardex');
// Route::post('rmKardex', 'InventarioController@rmKardex')->name('rmKardex');
// Route::get('Articulos', 'InventarioController@getArticulos')->name('Articulos');
// Route::get('InitKardex', 'InventarioController@InitKardex')->name('InitKardex');

// Route::post('UpdateArticulo', 'InventarioController@UpdateArticulo')->name('UpdateArticulo');

Route::get('Usuarios', 'UsuarioController@getUsuarios')->name('Usuarios');
Route::post('SaveUsuario', 'UsuarioController@SaveUsuario')->name('SaveUsuario');
Route::post('DeleteUsuario', 'UsuarioController@DeleteUsuario')->name('DeleteUsuario');
Route::get('getBodegas', 'UsuarioController@getBodegas')->name('getBodegas');
Route::post('rmBodega', 'UsuarioController@rmBodega')->name('rmBodega');
Route::post('AsignarBodega', 'UsuarioController@AddBodega')->name('AsignarBodega');

