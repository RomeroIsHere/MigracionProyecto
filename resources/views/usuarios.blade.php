<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>

    @foreach ($lista as $nombre)
        <p>
            {{ $nombre }}
        </p>
    @endforeach
    @foreach ($producto as $clave => $valor)
        <h3>
            {{ $clave }}:{{ $valor }}
        </h3>
    @endforeach
    <a href="{{ route('inicio') }}">Inicio</a>
</body>
</html>