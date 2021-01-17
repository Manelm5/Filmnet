<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="views/css/registro_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<script src="../views/AJAX/Funcions_mostrar_informacio.js"></script>

<div class="grid-container">

    <div class="header_grid"></div>

    <div class="formulario">
        <h3>Registrate en FILMNET</h3>



        <div class="registro">
            <form action="index.php?action=doRegistro" method="post" onsubmit="return validar_usuario()">
                <input type="reset" value="Limpiar campos">
                <p id="text">Nombre:</p>
                <input type="text" id="nombre" name="nombre" maxlength="40" placeholder="Su nombre.."> <br/>

                <p id="text">Apellidos:</p> <input type="text" id="apellidos" name="apellidos" maxlength="40" placeholder="Sus apellidos.."> <br/>

                <p id="text">DNI:</p> <input type="text" id="dni" name="dni" maxlength="9" placeholder="Su DNI.."> <br/>

                <p id="text">Dirección:</p> <input type="text" id="direccion" name="direccion" maxlength="30" placeholder="Su dirección.."> <br/>

                <p id="text">Población:</p> <input type="text" id="poblacion" name="poblacion" maxlength="30" placeholder="Su población.."> <br/>

                <p id="text">Codigo Postal:</p> <input type="text" id="postal" name="postal" maxlength="5" placeholder="Su código postal.."> <br/>

                <p id="text">Correo electrónico:</p> <input type="email" id="mail" name="mail" maxlength="40" placeholder="Su mail.."> <br/>

                <p id="text">Contraseña:</p> <input type="password" id="password" name="password" maxlength="25" placeholder="Su contraseña.."> <br/>


                <input type="submit" value="Registrarse">

            </form>
        </div>
    </div>
</div>

</body>
</html>