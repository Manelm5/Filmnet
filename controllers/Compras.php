<?php

$precioTotal = 0;

require_once('models/ConsultaFacturas.php');
require_once('models/ConsultaPeliculas.php');
$totalCompras = getComandas($_SESSION['USUARIO'][0]);

if($totalCompras != NULL){
    $peliculaComprada = $totalCompras[0];
    $id_facturaActual = $peliculaComprada['id_factura'];
    $precioTotal = $peliculaComprada['precio_total'];
}


$peliculas_carrito = NULL;
$conjunto_facturas = NULL;

$numFactura = 0;

$j = 0;


for ($i = 0; $i < count($totalCompras); $i++) {

    $peliculaComprada = $totalCompras[$i];

    $pelicula_anadida = getPeliculaPorID($peliculaComprada['id_pelicula']);

    $producto = array(
        'ID' => $pelicula_anadida["id"],
        'TITULO' => $pelicula_anadida["Titulo"],
        'PRECIO' => $pelicula_anadida["Precio"],
        'PORTADA' => $pelicula_anadida["Portada"],
        'CANTIDAD' => $peliculaComprada["cantidad"],
        'FECHA' => $peliculaComprada["fecha"],
        'PRECIO_TOTAL' => $peliculaComprada["precio_total"]
    );

    if ($id_facturaActual == $peliculaComprada['id_factura']) {
        $conjunto_facturas[$numFactura][$j] = $producto;
        $j++;
    } else {
        $numFactura++;
        $j = 0;
        $conjunto_facturas[$numFactura][$j] = $producto;
        $id_facturaActual = $peliculaComprada['id_factura'];
        $j++;
    }

}

$numFacturas = count($conjunto_facturas);

require('Header.php');
require_once('resumenCarrito.php');

require_once('views/PHP/MostrarCompras.php');

?>