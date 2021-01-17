<?php

require_once('models/connectBD.php');

$conexion = connectaBD();

try{

$user_image_predet = 'user_predeterminado.png';

    $sql = "INSERT INTO Usuario (Nombre, Apellidos, DNI, Mail, Password, Imagen_perfil, Dirección, Población, Codigo_postal) 
VALUES (?,?,?,?,?,?,?,?,?)";

    $statement = $conexion->prepare($sql);

    if (filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        $statement->bindValue(1, $nombre);
        $statement->bindValue(2, $apellidos);
        $statement->bindValue(3, $dni);
        $statement->bindValue(4, $mail);
        $statement->bindValue(5, $hash);
        $statement->bindValue(6, $user_image_predet);
        $statement->bindValue(7, $direccion);
        $statement->bindValue(8, $poblacion);
        $statement->bindValue(9, $postal);

        $statement->execute();
    }
    else {
        echo 'e-mail inválido';
    }


} catch(PDOException $e) {

    echo $e->getMessage();

}


?>