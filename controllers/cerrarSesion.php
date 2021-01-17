<?php

if(isset($_SESSION['USUARIO']))
{
    unset($_SESSION['USUARIO']);
    header('Location:  http://tdiw-i5.deic-docencia.uab.cat');
}

?>