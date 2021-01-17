<?php

$search = $_POST['search'];

require_once('models/ConsultaPeliculas.php');

$resultado = getPeliculasPorPalabra($search);


require_once('Header.php');
require_once('resumenCarrito.php');

require_once('views/PHP/MostrarResultadosBusqueda.php');



?>