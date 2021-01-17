
<?php
session_start();


require('../models/ConsultaPeliculas.php');

    $id = $_REQUEST['param1'];

    $pelicula_anadida = getPeliculaPorID($id);

    $producto=array(
        'ID' =>$id,
        'TITULO'=>$pelicula_anadida["Titulo"],
        'PRECIO'=>$pelicula_anadida["Precio"],
        'PORTADA'=>$pelicula_anadida["Portada"],
        'CANTIDAD'=>1
    );


    if(!isset($_SESSION['CARRITO']))
    {
        $_SESSION['CARRITO'][0] = $producto;
    }else{
        $repetido=false;
        $numProductos=count($_SESSION['CARRITO']);

        for ($i = 0; $i < $numProductos; $i++) { //Busca si esta repetido
           if($_SESSION['CARRITO'][$i]["ID"] == $id){
               $_SESSION['CARRITO'][$i]["CANTIDAD"]++;
               $repetido=true;
           }
        }
        if($repetido==false){   //Si no encuentra repetidas, la mete en el carro
            $_SESSION['CARRITO'][$numProductos] = $producto;
        }

    }
?>



