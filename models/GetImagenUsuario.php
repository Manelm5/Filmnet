<?php

require_once 'models/connectBD.php';

function getImagenporId($mail)
{
    $connection = connectaBD();
    $sql_user = "SELECT Imagen_perfil FROM `Usuario` WHERE Mail = '$mail' ";
    $stm = $connection->prepare($sql_user);
    $stm->execute();
    $resultado_user = $stm->fetch();
    return $resultado_user[0];
}

?>