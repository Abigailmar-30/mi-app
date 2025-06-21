<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Mi Framework Laravel</h1>
        <nav>
            <a href="/producto">Inicio</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 Mi Framework</p>
    </footer>
</body>
</html>
