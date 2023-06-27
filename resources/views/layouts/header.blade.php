<!DOCTYPE html>
<html>
<head>
    <title>Sitio de noticias</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Enlaces al menú -->
    <nav>
        <ul>
            <li><a href="{{ route('index') }}" >Home</a></li>
            <li><a href="{{ route('apiNoticias', ['page' => 1]) }}" target="_blank">API_noticias</a></li>
            <li><a href="{{ route('apiNoticia', ['id' => 1]) }}" target="_blank">API_noticia</a></li>
            <li><a href="{{ route('login') }}">Log in</a></li>
            <!-- Comprobación condicional para mostrar el enlace de registro -->
            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
            @endif
        </ul>
    </nav>
</body>
</html>
