<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación - @yield('title')</title>
</head>
<body>
    <header>
        @include('partial.nav')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>todos los Usuarios son Importantes</p>
    </footer>
</body>
</html>