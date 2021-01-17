<?php

if(isset($_SESSION['CARRITO']))
{
    unset($_SESSION['CARRITO']);
    header('Location:  http://tdiw-i5.deic-docencia.uab.cat/index.php?action=carrito');
}

?>