@extends('layouts.layout')

@yield('header')

@section('title')
    <title>Editar Usuario</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">Editar los datos del usuario #{{$user->id}}</h1>
    @endsection

        @if($errors->any())
            <div class="alert alert-danger">
                <h6>Por favor, corregir los siguientes errores:</h6>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="" action="{{url('usuarios/'.$user->id)}}">

            {!!csrf_field()!!}

            {{ method_field('PUT') }}

            <p>
                Nombre: <input type="text" name="name" id="name" value="{{$user->name}}" placeholder="Nombre Apellido" /> 
                Email: <input type="email" name="email" id="email" value="{{$user->email}}" placeholder="email@valido.com" />
                Contraseña: <input type="password" name="password" id="password" value="" placeholder="mínimo 6 digitos" />
            </p>
            <input type="submit" value="Aceptar" />
        </form>

        <p><a href="{{url('')}}">Regresar</a></p>
   
@endsection

@yield('footer')