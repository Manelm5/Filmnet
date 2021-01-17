<?php

$precioTotal = 0;

if(isset($_SESSION['CARRITO'])) {
    $peliculas_carrito = $_SESSION['CARRITO'];
    $numProductos = count($_SESSION['CARRITO']);

    for ($i = 0; $i < $numProductos; $i++) {
        $producto = $_SESSION['CARRITO'][$i];

        if($producto['CANTIDAD'] > 1){
            $precioTotal = $precioTotal + $producto['PRECIO']*$producto['CANTIDAD'];
        }else{
            $precioTotal = $precioTotal + $producto['PRECIO'];
        }

    }

}else{
    $peliculas_carrito = NULL;
}
require('Header.php');
require_once('views/PHP/MostrarCarrito.php');


?>