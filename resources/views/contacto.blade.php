<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/enviar-contacto">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="mensaje">Mensaje:</label>
        <input type="text" name="mensaje">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
