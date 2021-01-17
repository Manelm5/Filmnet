<?php

require_once('models/connectBD.php');



function insertarFactura($mail,$precioTotal,$numProductos,$date)
{
    $conexion = connectaBD();

    $date_actual = $date;
    try{


        $sql = "INSERT INTO Factura (idmail_usuario, precio_total, cantidad, Fecha) VALUES (?,?,?,?)";


        $statement = $conexion->prepare($sql);

        $statement->bindValue(1, $mail);
        $statement->bindValue(2, $precioTotal);
        $statement->bindValue(3, $numProductos);
        $statement->bindValue(4, $date_actual);

        $statement->execute();


    } catch(PDOException $e) {

        echo $e->getMessage();

    }

    return $date_actual;

}


?>