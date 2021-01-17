<?php

$remove_item = $_GET["id"];
?>

<?php

$peliculas_carrito = $_SESSION['CARRITO'];
$numProductos = count($_SESSION['CARRITO']);
$i = 0;
$encontrado = false;

    while (!$encontrado and $i < $numProductos) {

        if($remove_item == $_SESSION['CARRITO'][$i]['ID']){
            unset($_SESSION["CARRITO"][$i]);
            $_SESSION["CARRITO"] = array_values($_SESSION["CARRITO"]);
            $encontrado = true;
            if(0 == count($_SESSION['CARRITO'])){
                unset($_SESSION["CARRITO"]);
            }
        }
        $i++;
    }

header('Location:  http://tdiw-i5.deic-docencia.uab.cat/index.php?action=carrito');

?>