<?php

require_once('connectBD.php');




function getUsuario($mail)
{
    $connection = connectaBD();
    $sql_user = "SELECT * FROM `Usuario` WHERE Mail = '$mail'";
    $stm = $connection->prepare($sql_user);
    $stm->execute();
    $resultado_user = $stm->fetch();
    return $resultado_user;

}


?>