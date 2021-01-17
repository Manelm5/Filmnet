
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../views/css/resumenCompra_design.css?v=<?php echo time(); ?>" rel="stylesheet"
          type="text/css"/>
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<body>
<div id="summery">
    <ul>
        <li>
            <h4 id="titulo"> Resumen de la compra </h4>
        </li>

        <li style="float:right;">
            <h4 id="elemento"> Precio total: <?php echo $precioTotal ?>€</h4>
        </li>

        <li style="float:right;">
            <h4 id="elemento"> Películas en el carrito: <?php echo $cantidadPeliculas ?></h4>
        </li>

    </ul>
</div>

</body>
</html>

