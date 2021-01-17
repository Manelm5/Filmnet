<?php
    
require_once('models/ConsultaPeliculas.php');

$resultat = getPeliculasEstreno()->fetchAll(PDO::FETCH_ASSOC);

require_once('views/MostraPeliculas.php');
?>