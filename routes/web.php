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
Route::get('/', 'Auth\LoginController@showLoginForm')->name("Init");
Route::get('/logout', 'Auth\LoginController@logout');



Route::get('Home', 'DashboardController@getDashboard')->name('Home');

Route::get('AddEmployee', 'EmployeeController@AddEmployee')->name('AddEmployee');
Route::get('Employee', 'EmployeeController@Employee')->name('Employee');

Route::get('Usuarios', 'UsuarioController@getUsuarios')->name('Usuarios');
Route::post('SaveUsuario', 'UsuarioController@SaveUsuario')->name('SaveUsuario');
Route::post('DeleteUsuario', 'UsuarioController@DeleteUsuario')->name('DeleteUsuario');


Route::get('Catalogos', 'CatalogoController@getCatalogos')->name('Catalogos');

Route::get('Requests', 'RequestsController@getRequests')->name('Requests');


