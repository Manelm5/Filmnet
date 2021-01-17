<?php
if($peliculas_carrito != NULL) {
    for ($i = 0; $i < $numProductos; $i++) {
        $pelicula_actual = $peliculas_carrito[$i];
        ?>

        <div class="grid-product">

            <div id="poster">
                <img src="views/imagenes/portadas/<?php echo $pelicula_actual['PORTADA'] ?>">
            </div>

            <div id="titulo_pelicula">
                <h4 id="mini-titulo"><?php echo $pelicula_actual['TITULO'] ?></h4>
            </div>
            <div id="cantidad">
                <h4 id="mini-titulo"><?php echo $pelicula_actual['CANTIDAD'] ?></h4>
            </div>
            <div id="precio">
                <h4  id="mini-titulo"><?php echo $pelicula_actual['PRECIO']*$pelicula_actual['CANTIDAD'] ?>€</h4>
            </div>
        </div>

        <hr/>

        <?php
    }
}
?>