<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="views/css/registro_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="grid-container">

    <div class="header_grid"></div>

    <div class="formulario">
        <h3>Iniciar sesión en FILMNET</h3>

        <div class="registro">
            <form action="index.php?action=doLogin" method="post">

                <input type="reset" value="Limpiar campos">

                <p id="text">Correo electrónico:</p> <input type="email" id="mail" name="mail" maxlength="40" placeholder="Su mail.."> <br/>

                <p id="text">Contraseña:</p> <input type="password" id="password" name="password" maxlength="25" placeholder="Su contraseña.."> <br/>

                <input type="submit" value="Iniciar sesión">

            </form>
        </div>
    </div>
</div>

</body>
</html>