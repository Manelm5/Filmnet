<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mis compras</title>
    <link href="views/css/carrito_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="grid-container">

    <div class="header_grid"></div>

    <div id="titulo_header">
    	 <h1>Mis compras</h1>


    </div>

    <div class="contenido_compras">
        <?php
        if($numFacturas > 0) {
            for ($j = 0; $j < $numFacturas; $j++) {
                ?>

                <li id="fecha_compra">Fecha de la compra: <?php echo $conjunto_facturas[$j][0]['FECHA'] ?></li>

                <div class="grid-product">

                    <div id="poster">
                        <h3 id="titles_elements">Película</h3>
                    </div>

                    <div id="titulo_pelicula">
                        <h3 id="titles_elements">Título</h3>
                    </div>
                    <div id="cantidad">
                        <h3 id="titles_elements">Cantidad</h3>
                    </div>
                    <div id="precio">
                        <h3 id="titles_elements">Precio</h3>
                    </div>
                </div>
                <hr/>


                <?php
                $peliculas_carrito = $conjunto_facturas[$j];
                $numProductos = count($peliculas_carrito);
                require('Producto_compras.php');
                ?>
                <div class="grid-product">

                    <div id="precio_final_titulo">
                        <h4 id="precio_final">Precio final: </h4>
                    </div>
                    <div id="precio">
                        <h4 id="precio_final"><?php echo $conjunto_facturas[$j][0]['PRECIO_TOTAL'] ?>€</h4>
                    </div>
                </div>

                <?php
            }
        }else{ ?>

        <h2 id="mensaje">No se han realizado compras</h2>

        <?php
        }
        ?>

    </div>

</div>

</body>
</html>