
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../views/css/header_style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php
$filesPublicPath = '/ficheros/';
?>

<body>
<div id="header">
    <ul>
        <li>
            <a href="index.php">
                <img id="title" src="../views/imagenes/filmnet2.png">
            </a>
        </li>

        <li>
        <div class="search-container">
            <form action="index.php?action=buscar"  method="post">
                <input type="text" id="search" name="search" placeholder="Buscar..">
                <button name="foo" type="submit"><img src="../views/imagenes/search-icon.png"></button>
            </form>
        </div>
        </li>

        <li class="dropdown"  style="float:right;"">
        <button class="dropbtn" onclick="location.href='index.php?action=carrito'" type="button">
            <img id="icono_carrito" src="../views/imagenes/carrito.png">
        </button>
        </li>
        <?php
        if(isset($_SESSION["USUARIO"])) {?>
            <li class="dropdown"  style="float:right;"">
            <button class="dropbtn">
                <?php if($imagen != "user_predeterminado.png"){ ?>
                <div id="image-cropper_header">
                    <img id="foto_perfil_header" src="<?php echo $filesPublicPath.$imagen ?> " alt="<?php echo $usuario['NOMBRE'] ?> "/>
                </div>
                <?php
                }else{?>
                    <img id="icono_carrito" src="../views/imagenes/user.png">
                <?php
                }
                ?>
            </button>
            <div class="dropdown-content">
                <a href=index.php?action=editarperfil>Mi cuenta</a>
                <a href=index.php?action=compras>Mis compras</a>
                <a href="index.php?action=logout">Cerrar Sesión</a>
            </div>
            </li>
        <?php
        }
        else {?>
        <li class="dropdown"  style="float:right;"">
        <button class="dropbtn">
            <img id="icono_carrito" src="../views/imagenes/user.png">
        </button>
        <div class="dropdown-content">
            <a href="index.php?action=login">Iniciar Sesión</a>
            <a href="index.php?action=registrar">Registrarse</a>
        </div>
        </li>
        <?php }

        if(isset($_SESSION["USUARIO"])) {?>
        <li id="nombreUsuario"  style="float:right;"">
            <?php echo '<p>' . $_SESSION['USUARIO'][1] . '</p>'; ?>
        </li>
        <?php
        } ?>
    </ul>
</div>

<script>
    $(document).ready(function() {
        $(".dropbtn").hover(function() {
            $("dropdown-content").toggle();
        })
    })
</script>

</body>
</html>

