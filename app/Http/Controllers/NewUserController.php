<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUserController extends Controller
{
    //
    public function index(){
    	
    	$title='Crear Nuevo Usuario';

		return view ('newusers')
		->with('title', $title);

    }
}
