@extends('layouts.layout')

@yield('header')

@section('title')
    <title>Crear Nuevo Usuario</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">Crear Nuevo Usuario</h1>
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

        <form method="POST" action="{{url('usuarios/crear')}}">

            {!!csrf_field()!!}

            {{ method_field('POST') }}

            <p>
                Nombre: <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Nombre Apellido" /> 
                Email: <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="email@valido.com" />
                Contraseña: <input type="password" name="password" id="password" value="{{old('password')}}" placeholder="mínimo 6 digitos" />
            </p>
            <input type="submit" value="Aceptar" />
        </form>
        
        <p><a href="{{url()->previous()}}">Regresar</a></p>

@endsection

@yield('footer')