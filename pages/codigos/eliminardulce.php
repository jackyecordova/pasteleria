<?php 
		
	include './conexion.php';
	$mysqli->query("DELETE FROM dulces where codigo=".$_POST['codigoeliminar']);
	header("Location: ../tables/dulcesinventario.php");
 ?>
