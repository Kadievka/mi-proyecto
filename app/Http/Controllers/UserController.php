<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
	public function index(){

		$users=[
			'Do',
			'Re',
			'Mi',
			'Fa',
			'Sol',
			'La',
			'Si',
			'<script>$kad="123321"</script>',
		];

		$title='Listado de Usuarios';

		return view ('users',['users'=>$users, 'title'=>$title]);
	}

}
