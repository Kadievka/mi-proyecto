@extends('layouts.layout')

@yield('header')

@section('title')
<title>{{$title}}</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">Listado de Usuarios</h1>
    @endsection

    <div class="row">
	    <div class="col-md-10">
		    <table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col" width="25%">Nombre</th>
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
				      	<form method="POST" action="{{route('users.destroy',$user)}}">

				      		<a href="{{route('users.show',$user)}}" class="btn btn-link"><span class="oi oi-eye"></a>||
		        			<a href="{{route('users.edit',$user)}}" class="btn btn-link"><span class="oi oi-pencil"></a>||</li>

			        		
			        	
			        			{!!csrf_field()!!}

			            		{{ method_field('DELETE') }}

			            		<button type="submit" value="Eliminar" class="btn btn-link"><span class="oi oi-trash"></span></button>

			        		</form>
		        	  </td>
				    </tr>

			    @empty
		        	<p>No hay usuarios registrados</p>
		    	@endforelse

			  </tbody>
			</table>
		</div>
	</div>

    <p><a href="{{url('/')}}">Regresar</a></p>

@endsection

@yield('footer')
