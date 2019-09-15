@extends('layouts.layout')

@yield('header')

@section('title')
<title>{{$title}}</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">Listado de Usuarios</h1>
    @endsection

    <table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Correo</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
	  <tbody>

	  	@forelse ($users as $user)
		    <tr>
		      <th scope="row">{{$user->id}}</th>
		      <td>{{$user->name}}</td>
		      <td>{{$user->email}}</td>
		      <td>
		      	<a href="{{route('users.show',$user)}}">Ver Detalles</a>||
        		<a href="{{route('users.edit',$user)}}">Editar</a>||</li>

	        		<form method="POST" action="{{route('users.destroy',$user)}}">
	        	
	        			{!!csrf_field()!!}

	            		{{ method_field('DELETE') }}

	            		<input type="submit" value="Eliminar" />

	        		</form>
        	  </td>
		    </tr>

	    @empty
        	<p>No hay usuarios registrados</p>
    	@endforelse

	  </tbody>
	</table>

    <p><a href="{{url('/')}}">Regresar</a></p>

@endsection

@yield('footer')
