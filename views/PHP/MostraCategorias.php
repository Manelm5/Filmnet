<script src="../views/AJAX/Funcions_mostrar_informacio.js"></script>

<?php
foreach ($resultado as $fila) {
 ?>

<li>
    <a onclick="mostrarCategorias(<?php echo $fila["id"];?>)" href="javascript:">

	<?php
	    echo $fila["Nombre"];
	    echo "<br/>";
	?>
    </a>
</li>

<?php
}
?>

