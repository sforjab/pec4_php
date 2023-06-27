<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
</head>
<body>
    @include('layouts.header')
    <h1>Listado de Noticias</h1>

    <div id="listaNoticias">
        <ul>
            @foreach ($noticias as $noticia)
                <li>
                    <h2>
                        <a href="{{ route('detalleNoticia', $noticia->id) }}">
                            {{ $noticia->titulo }}
                        </a>
                    </h2>
                    <img src="{{ $noticia->imagen }}" alt="{{ $noticia->titulo }}">
                    @php
                        $fechaFormateada = \Carbon\Carbon::parse($noticia->fecha_publicacion)->format('d/m/Y');
                    @endphp
                    <p>Fecha de publicación: {{ $fechaFormateada }}</p>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>