<?php

$form_pass = $_POST['password'];
$hash = password_hash($form_pass, PASSWORD_BCRYPT);
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$mail = $_POST['mail'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$postal = $_POST['postal'];

require_once('models/ConsultaUsuario.php');
$usuario_recogido = getUsuario($mail);


if($usuario_recogido != false)
{
    require_once('views/PHP/Registro.php');
    require_once('Header.php');
    ?> <script> alert('ERROR: El mail ya está registrado en la base de datos.'); </script>
    <?php


} else {


    require_once('models/insertarUsuario.php');
    require_once('models/tratarLogin.php');

    $_SESSION['USUARIO'][0] = $mail;
    $nombreApellido = getNombreUsuarioPorMail($mail);
    $_SESSION['USUARIO'][1] = $nombreApellido['Nombre'] . " " . $nombreApellido['Apellidos'];


    header('Location:  http://tdiw-i5.deic-docencia.uab.cat');


}






?>