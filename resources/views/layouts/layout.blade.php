<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>DevShare - @yield('title')</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="index.html"><img src="unknown-1.png" alt="DevShare"></a>
            <a href="index.html">DevShare</a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                <li><a href="contacto.html">Contactanos</a></li>
                <li><a href="FAQ.html">FAQ</a></li>
            </ul>
        </nav>
        <div class="link-user">
            <a href=""><button>Crear Cuenta</button></a>
            <a href=""><button>Iniciar Sesión</button></a>  
        </div>
    </header>

    @yield('content')

    <footer>

    </footer>
</body>
</html>
