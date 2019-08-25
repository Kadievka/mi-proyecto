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

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/nuevo', 'NewUserController@index');

Route::get('/usuarios/{id}', function ($id) {
    return '<h1>Mostarndo Detalle del Usuario: '.$id.'</h1>';
});

Route::get('/saludo/{name}/{nickname?}', function ($name,$nickname=null) {
	if($nickname){
		return '<h1>Bienvenido '.$name.', tu apodo es: '.$nickname.' </h1>';
	}else{
		return '<h1>Bienvenido '.$name.', no tienes apodo </h1>';
	}
});



    
