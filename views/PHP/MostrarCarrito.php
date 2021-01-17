<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
    <link href="views/css/carrito_design.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<div class="grid-container">

    <div class="header_grid"></div>

    <div id="titulo_header">
        <?php if(isset($_SESSION["CARRITO"])){?>
            <form action="index.php?action=vaciarCarrito" method="post">
                <input id="vaciar_carrito_button" type="submit" value="Vaciar carrito" />
            </form>
        <?php } ?>
    	 <h1>Contenido del carrito</h1>


    <?php if(isset($_SESSION["CARRITO"])){?>

        <div class="grid-product">

            <div id="poster">
                <h3 id="titles_elements"">Película</h3>
            </div>

            <div id="titulo_pelicula">
                <h3 id="titles_elements"">Título</h3>
            </div>
            <div id="cantidad">
                <h3 id="titles_elements"">Cantidad</h3>
            </div>
            <div id="precio">
                <h3 id="titles_elements"">Precio</h3>
            </div>
            <div id="borrar">
                <h6 id="titles_elements"></h6>
            </div>
        </div>

        <hr/>
    <?php } ?>
    </div>

    <div class="contenido_carrito">
    <?php if(isset($_SESSION["CARRITO"])){

        require('Producto_carrito.php');
        ?>

        <div class="grid-product">

            <div id="precio_final_titulo">
                <h4 id="precio_final">Precio final: </h4>
            </div>
            <div id="precio">
                <h4  id="precio_final"><?php echo $precioTotal ?>€</h4>

                <form action="index.php?action=doFactura" method="post">
                    <input id="terminar_pedido_button" type="submit" value="Terminar pedido" />
                </form>
            </div>
        </div>



    </div>

    <?php }
    else{?>

        <h2 id="mensaje">El carrito está vacío</h2>

    <?php }?>
    </div>
</div>

</body>
</html>