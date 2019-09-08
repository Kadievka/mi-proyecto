@extends('layouts.layout')

@yield('header')

@section('title')
    <title>{{$title}}</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">{{$title}}</h1>
    @endsection

        <form method="POST" action="{{url('usuarios/crear')}}">

            {!!csrf_field()!!}

            <p>
                Nombre: <input type="text" name="name" value="" /> 
                Email: <input type="email" name="email" value="" />
                Contraseña: <input type="password" name="password" value="" />
            </p>
            <input type="submit" value="Aceptar" />
        </form>
        
        <!-- NOTA: quiero realizar una verificación de datos en que si no hay nombre se muestre un mensaje de alerta cuando se pulsa el botón de aceptar -->
   
@endsection

@yield('footer')