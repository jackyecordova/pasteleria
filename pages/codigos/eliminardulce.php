<?php 
		
	include './conexion.php';
	$mysqli->query("DELETE FROM detventadulce where id_detventa=".$_POST['codigoeliminar']);
	header("Location: ../forms/dulceventa.php");
 ?>
