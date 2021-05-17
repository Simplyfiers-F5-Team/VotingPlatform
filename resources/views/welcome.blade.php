<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Voting platform</title>
</head>
<body class="bgMorado textWhite">
<main>
    <h1 class="pb-4"><img class="logobasetis" src="./img/Basetis_Logotipo.svg" alt="Logo Basetis"></h1>
    <h2 class="fontFam">Bienvenido a la <br/> plataforma de votación</h2>
    <section class="pb-4">
        <form action="" method="post" class="pt-3 px-3">
            <fieldset class="borderColorRosa p-3 d-grid gap-2">
                <label for="employee" class="fontFam h4">Escoge tu próxima formación</label>
                <input type="text" name="employee" id="employee" class="" placeholder="Identificación del trabajador">
                <input type="submit" class="btn bgRosa fontFam textWhite" value="INGRESAR">
            </fieldset>
        </form>
    </section>
    <section class="pt-5">
        <form action="" method="post" class="px-3">
            <fieldset class="borderColorRosa p-3 d-grid gap-2">
                <p class="fontFam h4">¿Eres formador?</p>
                <a href="{{ route('home') }}" class="btn bgRosa fontFam textWhite">LOGIN</a>
            </fieldset>
        </form>
    </section>
</main>

</body>
</html>
