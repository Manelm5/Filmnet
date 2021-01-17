<?php

require_once('models/connectBD.php');


$conectar=connectaBD();

$password = $_POST['password'];
$mail = $_POST['mail'];

require_once('models/tratarLogin.php');

$verificado = login($mail, $password, $conectar);

if($verificado) {

    $_SESSION['USUARIO'][0] = $mail;
    $nombreApellido = getNombreUsuarioPorMail($mail);
    $_SESSION['USUARIO'][1] = $nombreApellido['Nombre'] . " " . $nombreApellido['Apellidos'];

    header('Location:  http://tdiw-i5.deic-docencia.uab.cat');
}
else{
    header('Location: http://tdiw-i5.deic-docencia.uab.cat?action=login');
    ?>
    <script>alert("Contraseña incorrecta");</script>
    <?php
}
?>