<?php

    require_once('models/ConsultaPeliculas.php');

    $selected_id = $_GET['id'];

    $pelicula = getPeliculaPorID($selected_id);

    require_once('views/PHP/MostraInfoPeliculas.php');
?>

