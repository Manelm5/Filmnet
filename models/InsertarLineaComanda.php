<?php

require_once('models/connectBD.php');



function consultaIdFactura($fecha_Actual,$mail)
{
    $connection = connectaBD();

    $sql_facturaid = "SELECT id FROM `Factura` WHERE Fecha = '$fecha_Actual' AND idmail_usuario = '$mail'";
    $stm = $connection->prepare($sql_facturaid);
    $stm->execute();
    $resultado_id = $stm->fetch();

    return $resultado_id[0];
}


function InsertarLineaComanda($id_factura)
{

    $conexion = connectaBD();

    try{
        if(isset($_SESSION['CARRITO'])) {
            $numProductos = count($_SESSION['CARRITO']);

            for ($i = 0; $i < $numProductos; $i++) {
                $producto = $_SESSION['CARRITO'][$i];

                $id_pelicula = $producto['ID'];
                $cantidad = $producto['CANTIDAD'];

                $sql = "INSERT INTO `Linea_comanda` (id_factura, id_pelicula, Cantidad) VALUES (?,?,?)";


                $statement = $conexion->prepare($sql);
                $statement->bindValue(1, $id_factura);
                $statement->bindValue(2, $id_pelicula);
                $statement->bindValue(3, $cantidad);

                $statement->execute();

            }
        }



    } catch(PDOException $e) {

        echo $e->getMessage();

    }
}



?>