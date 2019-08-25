<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
	public function index(){

		if (request()->has('empty')){
			$users=[];
		}else{
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
		}

		$title='Listado de Usuarios';

		return view ('users')
		->with('users',$users)
		->with('title',$title);
	}

}
