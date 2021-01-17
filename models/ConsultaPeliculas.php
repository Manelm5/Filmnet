

<?php

require_once('connectBD.php');


function getAllPelicules()
{
    $connection = connectaBD();
	$sql_peliculas = "SELECT * FROM `Pelicula` ";
    $stm = $connection->prepare($sql_peliculas);
    $stm->execute();
    $resultado_peliculas = $stm->fetch();
    return $resultado_peliculas;
}


function getPeliculaPorID($id)
{
    $connection = connectaBD();
	$sql_peliculas = "SELECT p.*, c.Nombre as Categoría 
                      FROM `Pelicula` p, `Categories` c 
                      WHERE p.id = '$id' and p.id_categoria = c.id";
	$stm = $connection->prepare($sql_peliculas);
	$stm->execute();
    $resultado_peliculas = $stm->fetch();
    return $resultado_peliculas;
}


function getPeliculasEstreno()
{
    $connection = connectaBD();
    $sql_peliculas = "SELECT * FROM `Pelicula` WHERE Estreno = '1'";
    $stm = $connection->prepare($sql_peliculas);
    $stm->execute();
    $resultado_peliculas_estreno = $stm->fetchAll();
    return $resultado_peliculas_estreno;

}


function getPeliculasMasVendidas()
{
    $connection = connectaBD();
    $sql_peliculas = "SELECT * FROM `Pelicula` WHERE Vendidas = '1'";
    $stm = $connection->prepare($sql_peliculas);
    $stm->execute();
    $resultado_peliculas_vendidas = $stm->fetchAll();
    return $resultado_peliculas_vendidas;

}


function getBannersPeliculas()
{
    $connection = connectaBD();
    $sql_peliculas = "SELECT ID, Banner FROM `Pelicula` WHERE Banner is not NULL";
    $stm = $connection->prepare($sql_peliculas);
    $stm->execute();
    $resultado_banner = $stm->fetchAll();
    return $resultado_banner[0];
}


function getPeliculasPorPalabra($palabra){
    $connection = connectaBD();
    $sql_peliculas = "SELECT * 
                      FROM `Pelicula` 
                      WHERE Sinopsis LIKE '%$palabra%'OR Titulo LIKE '%$palabra%' ";
    $stm = $connection->prepare($sql_peliculas);
    $stm->execute();
    $resultado_peliculas = $stm->fetchAll();
    return $resultado_peliculas;

}


?>