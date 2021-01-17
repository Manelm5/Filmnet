<?php

require_once('models/connectBD.php');



function actualitzaUsuari($mail,$nombre,$apellidos,$dni,$direccion,$poblacion,$postal,$hash)
{
    $conexion = connectaBD();

    try {


        $sql = "UPDATE `Usuario` SET `Nombre` = '$nombre', `Apellidos` = '$apellidos', `DNI` = '$dni', 
                `Password` = '$hash', `Dirección` = '$direccion', `Población` = '$poblacion', `Codigo_postal` = '$postal'
                WHERE `Usuario`.`Mail` = '$mail'";


        $statement = $conexion->prepare($sql);
        $statement->execute();



    } catch (PDOException $e) {

        echo $e->getMessage();

    }

}


?>