<?php

require('Header.php');

    if(isset($_SESSION["USUARIO"]))
    {

        require_once('models/InsertarFactura.php');

        $fecha_actual = insertarFactura($mail,$precioTotal,$cantidadPeliculas,$date);

        require_once('models/InsertarLineaComanda.php');

        $id_factura = consultaIdFactura($fecha_actual,$mail);

        InsertarLineaComanda($id_factura);

        unset($_SESSION['CARRITO']); //

        require_once('views/PHP/CompraRealitzada.php');

    } else {

       require_once('views/PHP/Login.php');

    }


?>