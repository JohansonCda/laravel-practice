<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if ($errors)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="/enviar-contacto">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        <label for="mensaje">Mensaje:</label>
        <input type="text" name="mensaje" value="{{ old('mensaje') }}">
        <input type="submit" value="Enviar">
    </form>


</body>
</html>
