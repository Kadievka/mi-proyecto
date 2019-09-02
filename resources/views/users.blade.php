<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listado de Ususarios</title>

    </head>
    <body>
        <h1>{{$title}}</h1>
        <hr>

        @forelse ($users as $user)
            <li>{{$user->id}}. {{$user->name}} ({{$user->email}})
            <a href="{{url('/usuarios/'.$user->id)}}">Ver Detalles</a></li>
        @empty
            <li>No hay usuarios registrados </li>
        @endforelse

    </body>
</html>