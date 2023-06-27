<!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
 </head>
 <body>
   @include('layouts.header')
   <h1>{{ $noticia->titulo }}</h1>
   <div id="noticiaUnica">
      <img src="{{ asset($noticia->imagen) }}" alt="{{ $noticia->titulo }}">
      @php
         $fechaFormateada = \Carbon\Carbon::parse($noticia->fecha_publicacion)->format('d/m/Y');
      @endphp
      <p><strong>Fecha de publicación:</strong> {{ $fechaFormateada }}</p>
      <p><strong>Autor:</strong> {{ $noticia->autor }}</p> 
      <p><strong>Contenido:</strong> {{ $noticia->contenido }}</p> 
   </div>
 </body>
 </html>