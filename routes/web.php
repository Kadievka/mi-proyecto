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

Route::get('/', function () {
    //return view('welcome');
    return 'Home';
});

Route::get('/usuarios', function () {
    //return view('welcome');
    return '<h1>Usuarios</h1>';
});

Route::get('/usuarios/detalles', function () {
    //return view('welcome');
    return '<h1>Mostarndo Detalle del Usuario: '.$_GET['id'].'</h1>';
});