<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pagina principal</title>
    <link href="views/css/categoria_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<body>



<div id="peliculas_estreno">

    <header>
        <h2 class="title_section"> Películas de <?php echo $nombrePelicula ?> </h2>
    </header>
    <div class="films_container">
        <?php
        $resultado = getPeliculasPorCategoria($selected_id);
        require('MostraPeliculas.php');
        ?>
    </div>
</div>


</body>



