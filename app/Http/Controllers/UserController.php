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
		
		/*$user=User::find($id);

		if($user==null){

			return view('Errors.404');

		}else{
			
			//dd($user);
			return view('users.show',compact('user'));

		}*/

		$user = User::findOrFail($id);
		return view('users.show',compact('user'));


	}

	public function create(){
    	
    	$title='Crear Nuevo Usuario';

		return view ('users.create')
		->with('title', $title);

    }

    public function store(){
    	
    	$data=request()->all();
    	//dd($data);
    	User::create([
    		'name'=>$data['name'],
    		'email'=>$data['email'],
    		'password'=>$data['password'],
    	]);

    	return redirect(route('users'));

    }

}
