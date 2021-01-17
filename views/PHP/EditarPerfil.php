<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi cuenta</title>
    <link href="views/css/registro_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<script src="../views/AJAX/Funcions_mostrar_informacio.js"></script>

<div class="grid-container">

    <div class="header_grid"></div>

    <div class="formulario">

        <h3>Tu perfil</h3>

        <div class="registro">


            <form action="index.php?action=doActualizacion" method="post" enctype="multipart/form-data" onsubmit="return validar_usuario()">

                <p id="text">Nombre:</p>
                <input type="text" id="nombre" name="nombre" maxlength="40" placeholder="Su nombre.." value="<?php echo $usuario["NOMBRE"];?>" > <br/>

                <p id="text">Apellidos:</p>
                <input type="text" id="apellidos" name="apellidos" maxlength="40" placeholder="Sus apellidos.." value="<?php echo $usuario["APELLIDOS"];?>"> <br/>

                <p id="text">DNI:</p>
                <input type="text" id="dni" name="dni" maxlength="9" placeholder="Su DNI.." value="<?php echo $usuario["DNI"];?>"> <br/>

                <p id="text">Dirección:</p>
                <input type="text" id="direccion" name="direccion" maxlength="30" placeholder="Su dirección.." value="<?php echo $usuario["DIRECCION"];?>"> <br/>

                <p id="text">Población:</p>
                <input type="text" id="poblacion" name="poblacion" maxlength="30" placeholder="Su población.." value="<?php echo $usuario["POBLACION"];?>"> <br/>

                <p id="text">Codigo Postal:</p>
                <input type="text" id="postal" name="postal" maxlength="5" placeholder="Su código postal.." value="<?php echo $usuario["POSTAL"];?>"> <br/>

                <p id="text">Correo electrónico:</p>
                <input type="email" id="mail" name="mail" maxlength="40" placeholder="Su mail.." value="<?php echo $usuario["MAIL"];?>" disabled> <br/>

                <p id="text">Contraseña:</p>
                <input type="password" id="password" name="password" maxlength="25" placeholder="Su contraseña.."> <br/>

                <p id="text">Foto de perfil:</p>
                <input type="file" name="profile_image" /> <br/> <br/> <br/>

                <div id="image-cropper">
                    <img id="foto_perfil" src="<?php echo $filesPublicPath.$usuario['RUTA_IMAGEN'] ?> " alt="<?php echo $usuario['NOMBRE'] ?> "/>
                </div>


                <input type="submit" value="Actualizar información">

            </form>
        </div>
    </div>
</div>

</body>
</html>