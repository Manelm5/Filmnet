<script src="../views/AJAX/Funcions_mostrar_informacio.js"></script>

<?php
foreach ($resultado as $fila) {

    ?>
    <div>
        <a class="enlaceAjax" onclick="mostraInfo_click(<?php echo $fila["id"];?>)" href="javascript:">
            <img src="views/imagenes/portadas/<?php echo $fila["Portada"];?>" alt="<?php echo $fila["Titulo"];?>">
        </a>
        <a class="enlaceAjax" onclick="mostraInfo_click(<?php echo $fila["id"];?>)" href="javascript:">
            <h3 class="title"><?php echo $fila["Titulo"];?></h3>
        </a>
    </div>

<?php
}
?>



