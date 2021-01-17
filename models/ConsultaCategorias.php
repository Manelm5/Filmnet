

<?php
require_once 'models/connectBD.php';


function getCategorias()
{
    $connection = connectaBD();
    $sql_categorias = "SELECT Nombre, id FROM `Categories` ";
    $resultado_categorias = $connection->query($sql_categorias);
    return $resultado_categorias;
}



function getNombreDeCategoriaPorID($id)
{
    $connection = connectaBD();
    $nombreCategoria = "SELECT Nombre FROM `Categories` WHERE id = $id";
    $stm = $connection->prepare($nombreCategoria);
    $stm->execute();
    $resultado_peliculas = $stm->fetch();
    return $resultado_peliculas[0];
}

function getPeliculasPorCategoria($id)
{
    $connection = connectaBD();
    $sql_peliculas = "SELECT p.* 
                      FROM `Pelicula` p, `Categories` c
                      WHERE p.id_categoria = '$id' and p.id_categoria = c.id";
    $stm = $connection->prepare($sql_peliculas);
    $stm->execute();
    $resultado_peliculas = $stm->fetchAll();
    return $resultado_peliculas;
}



?>