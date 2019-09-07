@extends('layouts.layout')

@section('header')

@section('title')
    <title>{{$title}}</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">{{$title}}</h1>
    @endsection

        <form>
            <p>
                Nombre: <input type="text" name="name" value="" /> 
                Apodo: <input type="text" name="nickname" value="" />
            </p>
            <input type="submit" value="Aceptar" />
        </form>
        
        <!-- NOTA: quiero realizar una verificación de datos en que si no hay nombre se muestre un mensaje de alerta cuando se pulsa el botón de aceptar -->
   
@endsection

@section('footer')