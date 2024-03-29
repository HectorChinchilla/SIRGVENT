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


Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');

Route::resource('cliente', 'ClienteController');

Route::resource('producto', 'ProductoController');

Route::resource('gastos', 'GastosProduccionController');

Route::resource('posi', 'PosicionEmpleadoController');

Route::resource('emple', 'EmpleadoController');

Route::resource('compra', 'CompraController');

Route::resource('detacompra', 'DetalleCompraController');

Route::resource('venta', 'VentaController');

Route::resource('detaventa', 'DetalleVentaController');

Route::resource('usuario', 'UserController');




