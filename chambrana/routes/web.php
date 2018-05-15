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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/caja', 'FacturasController@mesas')->name('caja');
Route::get('/caja/mesa/{id}', 'FacturasController@abrirFactura')->name('factura');
Route::post('/agregar_producto', 'FacturasController@agregarProducto')->name('agregar-producto');
Route::post('/caja/mesa/{id}', 'FacturasController@pagar')->name('pagar');
Route::get('/facturas', 'FacturasController@index')->name('facturas');
Route::get('/facturas/{id}', 'FacturasController@show')->name('ver_factura');

//Administrativas
Route::resource('inventario', 'Admin\InventarioController');
