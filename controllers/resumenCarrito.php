<?php

if(isset($_SESSION['CARRITO'])) {
    $numProductos = count($_SESSION['CARRITO']);
    $precioTotal = 0;
    $cantidadPeliculas = 0;

    for ($i = 0; $i < $numProductos; $i++) {

        $producto = $_SESSION['CARRITO'][$i];
        if($producto['CANTIDAD'] > 1){
            $precioTotal = $precioTotal + $producto['PRECIO']*$producto['CANTIDAD'];
        }else{
            $precioTotal = $precioTotal + $producto['PRECIO'];
        }

        $cantidadPeliculas += $producto['CANTIDAD'];

    }

    if ($numProductos > 0) {
        require_once('views/PHP/MostrarResumen.php');
    }
}
?>


