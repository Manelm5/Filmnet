<?php

require_once('models/GetImagenUsuario.php');

if(isset($_SESSION["USUARIO"])) {
    $imagen = getImagenporId($mail);
}

require('views/PHP/MostrarHeader.php');