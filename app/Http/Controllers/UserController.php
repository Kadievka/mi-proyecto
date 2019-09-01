<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
	public function index(){

		if (request()->has('empty')){
			$users=[];
		}else{
			
			/*$users=[
			'Do',
			'Re',
			'Mi',
			'Fa',
			'Sol',
			'La',
			'Si',
			'<script>$kad="123321"</script>',
			];*/

			//$users=DB::table('users')->get();
			//dd($users);

			$users=User::all();

		}

		$title='Listado de Usuarios';

		return view ('users')
		->with('users',$users)
		->with('title',$title);
	}

	public function show($id){
		$user=User::find($id);
		//dd($user);
		return view('usersShow',compact('user'));
	}

}
