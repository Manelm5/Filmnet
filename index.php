<?php
/**
 * Created by PhpStorm.
 * User: tdiw-i5
 * Date: 11/10/18
 * Time: 11:26
 */

session_start();

$precioTotal = 0;
$cantidadPeliculas = 0;
if(isset($_SESSION["USUARIO"]))
{
    $mail = $_SESSION["USUARIO"][0];
    $date = date("D M d, Y G:i:s");
}
if(isset($_SESSION["CARRITO"])){
    $numProductos=count($_SESSION['CARRITO']);

    for ($i = 0; $i < $numProductos; $i++) {
        $producto = $_SESSION['CARRITO'][$i];

        if($producto['CANTIDAD'] > 1){
            $precioTotal = $precioTotal + $producto['PRECIO']*$producto['CANTIDAD'];
        }else{
            $precioTotal = $precioTotal + $producto['PRECIO'];
        }
        $cantidadPeliculas += $producto['CANTIDAD'];
    }
}
$filesAbsolutePath = '/home/TDIW/tdiw-i5/public_html/ficheros/';
$filesPublicPath = '/ficheros/';

$action = $_GET['action'] ?? null; //default

switch ($action)
{

    case 'categoria':
        require __DIR__ . '/controllers/GetCategorias.php';
	break;
    case 'pelicula':
        require __DIR__ . '/controllers/GetPeliculas.php';
	break;    
	case 'info_pelicula':
        require __DIR__ . '/controllers/infoPelicula.php';
	break;
    case 'registrar':
        require __DIR__ . '/controllers/RegistrarUsuarios.php';
        break;
    case 'login':
        require __DIR__ .'/controllers/Login.php';
        break;
    case 'doLogin':
        require __DIR__ . '/controllers/TratarLogin.php';
        break;
    case 'doRegistro':
        require __DIR__ . '/controllers/AgregarUsuario.php';
        break;
    case 'logout':
        require __DIR__ . '/controllers/cerrarSesion.php';
        break;
    case 'summary':
        require __DIR__ . '/controllers/resumenCarrito.php';
        break;
    case 'carrito':
        require __DIR__ . '/controllers/Carrito.php';
        break;
    case 'doFactura':
        require __DIR__ . '/controllers/GenerarFactura.php';
        break;
    case 'buscar':
        require __DIR__ . '/controllers/Buscador.php';
        break;
    case 'editarperfil':
        require __DIR__ . '/controllers/Perfil.php';
        break;
    case 'doActualizacion':
        require __DIR__ . '/controllers/ActualizarInformacion.php';
        break;
    case 'vaciarCarrito':
        require __DIR__ . '/controllers/vaciarCarrito.php';
        break;
    case 'compras':
        require __DIR__ . '/controllers/Compras.php';
        break;
    case 'borrarCarrito':
        require __DIR__ . '/controllers/borrarCarrito.php';
        break;

    default:
        require __DIR__ . '/controllers/default.php';
	break;
}


?>