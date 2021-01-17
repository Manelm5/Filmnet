<?php

require_once('models/ConsultaCategorias.php');

$selected_id = $_GET['id'];

$nombrePelicula = getNombreDeCategoriaPorID($selected_id);

require_once('views/PHP/Categoria.php');
?>