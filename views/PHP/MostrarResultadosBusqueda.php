<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Búsqueda</title>
    <link href="views/css/resultados_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<body>

<div id="info_pelicula"></div>

<div class="grid-container">

    <div id="peliculas_estreno">

        <header>
            <h2 class="title_section"> Resultados de búsqueda "<?php echo $search ?>"</h2>
        </header>
        <?php
        if($resultado != NULL) {?>
        <div class="films_container">

            <?php require('MostraPeliculas.php'); ?>
        </div>
            <?php
            }else{ ?>
                <div id="contenedor_mensaje">
                    <h2 id="mensaje">No se han encontrado películas</h2>
                </div>
            <?php
            }
            ?>

    </div>

</div>


</body>

