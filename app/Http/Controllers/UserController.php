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
    	
		return view ('users.create');

    }

    public function store(){
    	
    	$data=request()->validate([
    		'name'=>'required',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:6'
    	],[
    		'name.required'=>'El campo Nombre es obligatorio'
    	]);

	    //dd($data);

	    User::create([
	    	'name'=>$data['name'],
	    	'email'=>$data['email'],
	    	'password'=>$data['password'],
	    ]);

	    return redirect(route('users'));
    }

    public function edit($id){

    	$user = User::findOrFail($id);
    	return view ('users.edit',compact('user'));

    }

    public function update($id){

    	$user = User::findOrFail($id);

    	$data=request()->all();
    	$data['password']=bcrypt($data['password']);

    	$user->update($data);

    	//dd($user);

    	return redirect ('usuarios/'.$user->id);

    }

}
