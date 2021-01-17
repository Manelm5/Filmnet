<?php

require('Header.php');
require_once('resumenCarrito.php');

if(isset($_SESSION["USUARIO"]))
{

    require_once('models/ConsultaUsuario.php');

    require_once('models/GetImagenUsuario.php');

    $imagen = getImagenporId($mail);

    $usuario_recogido = getUsuario($mail);

    $usuario=array(
        'MAIL' =>$mail,
        'DNI' => $usuario_recogido["DNI"],
        'NOMBRE' =>$usuario_recogido["Nombre"],
        'APELLIDOS' =>$usuario_recogido["Apellidos"],
        'RUTA_IMAGEN' =>$imagen,
        'DIRECCION' =>$usuario_recogido["Dirección"],
        'POBLACION' =>$usuario_recogido["Población"],
        'POSTAL' =>$usuario_recogido["Codigo_postal"]
    );


    require_once('views/PHP/EditarPerfil.php');
}


?>