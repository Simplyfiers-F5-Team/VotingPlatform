<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting platform</title>
</head>
<body>

    <h1 class="logo">basetis</h1>
    <h3>Bienvenido a la Plataforma de Votacion</h3>

    <form action="">
        <label>Escoge tu próxima Formación</label>
            <input type="text" name="IdTrabajador" value="Identificación del Trabajador">
        <input type="submit" value="Ingresar">
    </form>

    <a href="{{ route('home') }}">Eres formador</a>
</body>
</html>