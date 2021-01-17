<?php




function AñadirRutaImagen($mail,$nombrearchivo)
{

    $conexion = connectaBD();
    try {

        $sql = "UPDATE `Usuario` SET `Imagen_Perfil` = '$nombrearchivo' WHERE `Usuario`.`Mail` = '$mail'";


        $statement = $conexion->prepare($sql);
        $statement->execute();



    } catch (PDOException $e) {

        echo $e->getMessage();

    }

}

?>