<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Película</title>
    <link href="../views/css/film_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="contenido">
    <section class= "grid_container">

        <div class="close_button_area">
            <button class="close_button" onclick='$("#info_pelicula").hide();'>&#10005</button>
        </div>

        <div class = "movieTitle">
            <h1><?php
                $string = htmlentities($pelicula["Titulo"], ENT_HTML5, 'UTF-8');
                echo $string;?></h1>
        </div>

        <div class = "moviePoster">
            <img src="../views/imagenes/portadas/<?php
            $string = htmlentities($pelicula["Portada"], ENT_HTML5, 'UTF-8');
            echo $string;?>" alt="<?php
            $string = htmlentities($pelicula["Titulo"], ENT_HTML5, 'UTF-8');
            echo $string;?>" >
        </div>


        <div class = "film-informationFirst">
            <h3> Director: </h3>
            <p> <?php
                $string = htmlentities($pelicula["Director"], ENT_HTML5, 'UTF-8');
                echo $string;?> </p>
            <h3>Guión: </h3>
            <p><?php
                $string = htmlentities($pelicula["Guión"], ENT_HTML5, 'UTF-8');
                echo $string;?></p>
            <h3> Fecha de estreno: </h3>
            <p> <?php
                $string = htmlentities($pelicula["Fecha_Estreno"], ENT_HTML5, 'UTF-8');
                echo $string;?> </p>

            <input type='button' class="add_button" name='Release' onclick="insertarProductoAlCarrito(<?php
            $string = htmlentities($pelicula["id"], ENT_HTML5, 'UTF-8');
            echo $string;?>)"
                   value='<?php
                   $string = htmlentities($pelicula["Precio"], ENT_HTML5, 'UTF-8');
                   echo $string;?>€ Comprar'>
        </div>

        <div class = "film-informationSecond">
            <h3> Música: </h3>
            <p> <?php
                $string = htmlentities($pelicula["Música"], ENT_HTML5, 'UTF-8');
                echo $string;?> </p>
            <h3> Duración: </h3>
            <p> <?php
                $string = htmlentities($pelicula["Duración"], ENT_HTML5, 'UTF-8');
                echo $string;?> </p>
            <h3> Categoría: </h3>
            <p> <?php
                $string = htmlentities($pelicula["Categoría"], ENT_HTML5, 'UTF-8');
                echo $string;?></p>
        </div>

        <div class = "sinopsis">
            <h3> Sinopsis: </h3>
            <p> <?php
                $string = htmlentities($pelicula["Sinopsis"], ENT_HTML5, 'UTF-8');
                echo $string;?> </p> </br>
        </div>

        <div class = "trailer">
            <h3>  Trailer: </h3>

            <iframe id="trailer_video" width="560" height="315" src="<?php
            $string = htmlentities($pelicula["Trailer"], ENT_HTML5, 'UTF-8');
            echo $string;?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="footer"></div>


    </section>
</div>

</body>
</html>