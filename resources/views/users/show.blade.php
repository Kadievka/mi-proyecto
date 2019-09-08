@extends('layouts.layout')

@yield('header')

@section('title')
    <title>Detalles del Usuario</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">Detalles del Usuario #{{$user->id}}</h1>
    @endsection

        <form>
            <p>
                Nombre: <input type="text" name="name" value="{{$user->name}}" disabled="disabled" /> 
                Email: <input type="text" name="email" value="{{$user->email}}" disabled="disabled"/>

                @if(!$user->profession)
                    Profesión: <input type="text" name="profession" value="Sin Profesión" disabled="disabled"/>
                @else
                    Profesión: <input type="text" name="profession" value="{{$user->profession['title']}}" disabled="disabled"/>
                @endif

            </p>
        </form>

        <p><a href="{{url('/usuarios/')}}">Regresar</a></p>
        
        <!-- NOTA: quiero realizar una verificación de datos en que si no hay nombre se muestre un mensaje de alerta cuando se pulsa el botón de aceptar -->


@endsection

@yield('footer')