<?php


$form_pass = $_POST['password'];
$hash = password_hash($form_pass, PASSWORD_BCRYPT);
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$postal = $_POST['postal'];


require_once('models/modificarUsuario.php');
actualitzaUsuari($mail,$nombre,$apellidos,$dni,$direccion,$poblacion,$postal,$hash);

require_once('models/tratarLogin.php');
$nombreApellido = getNombreUsuarioPorMail($mail);
$_SESSION['USUARIO'][1] = $nombreApellido['Nombre'] . " " . $nombreApellido['Apellidos'];

if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']))
{

    $destinationPath = $filesAbsolutePath . 'imagen_perfil_' . $nombre . '_' . $dni . '.jpg';

    if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $destinationPath) == TRUE)
    {
        echo ('success, archivo subido');

        require_once('models/AñadirImagenPerfil.php');

        $nombrearchivo = 'imagen_perfil_' . $nombre . '_' . $dni . '.jpg';
        AñadirRutaImagen($mail,$nombrearchivo);

    }

}
else{

    echo('archivo vacio');
}


header('Location:  http://tdiw-i5.deic-docencia.uab.cat');

?>