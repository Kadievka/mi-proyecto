@extends('layouts.layout')

@yield('header')

@section('title')
<title>{{$title}}</title>
@endsection

@section('content')

    @section('contentTitle')
        <h1 class="mt-5">Listado de Usuarios</h1>
    @endsection

    @forelse ($users as $user)
        <li>{{$user->id}}. {{$user->name}} ({{$user->email}})
        <a href="{{url('/usuarios/'.$user->id)}}">Ver Detalles</a></li>
     @empty
        <li>No hay usuarios registrados </li>
    @endforelse

@endsection

@yield('footer')
