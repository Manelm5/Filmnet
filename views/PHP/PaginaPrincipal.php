<html>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Pagina principal</title>
    <link href="views/css/principal_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<body>

<?php
require_once('controllers/resumenCarrito.php');
?>

<div id="resumenCarrito"></div>

<div id="info_pelicula"></div>

<div class="grid-container">

    <div class="banner_area">
        <?php
        $banner = getBannersPeliculas();
        ?>
        <a class="enlaceAjax" onclick="mostraInfo_click(<?php echo $banner["ID"];?>)">
            <img id="banner_image" src="views/imagenes/<?php echo $banner["Banner"];?>">
        </a>
    </div>


    <div class="catagories">
        <h2 class="title_section">Categorías</h2>
        <ul>

            <?php
            $resultado = getCategorias();
            require_once('MostraCategorias.php');
            ?>

        </ul>
    </div>

    <div id="caratulas">

        <div id="peliculas_estreno">

            <header>
                <h2 class="title_section">Películas de estreno</h2>
            </header>
            <div class="films_container">
                <?php
                $resultado = getPeliculasEstreno();
                require('MostraPeliculas.php');
                ?>
            </div>
        </div>


        <div id="las_mas_vendidas">

            <header>
                <h2 class="title_section">Las más vendidas</h2>
            </header>
            <div class="films_container">
                <?php
                $resultado = getPeliculasMasVendidas();
                require('MostraPeliculas.php');
                ?>
            </div>
        </div>
    </div>

</div>





</body>



