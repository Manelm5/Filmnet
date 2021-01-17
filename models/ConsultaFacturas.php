<?php

require_once('connectBD.php');

function getComandas($mail)
{
    $connection = connectaBD();
    $sql_comandas = "SELECT f.precio_total, f.cantidad  as 'cantidad_total', f.fecha, c.id_factura, c.id_pelicula, c.cantidad 
                      FROM `Factura` f, `Linea_comanda` c
                      WHERE f.id = c.id_factura AND f.idmail_usuario = '$mail'
                      order by id desc";
    $stm = $connection->prepare($sql_comandas);
    $stm->execute();
    $resultado_comandas = $stm->fetchAll();
    return $resultado_comandas;
}




?>