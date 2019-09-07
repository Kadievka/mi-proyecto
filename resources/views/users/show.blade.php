<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Detalles</title>

        <!-- Válidators -->

    </head>
    <body>
        <h1>Detalles del Usuario {{$user->id}}</h1>
        <hr>
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

    </body>
</html>