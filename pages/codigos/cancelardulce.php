<?php 
		
	include './conexion.php';
	$mysqli->query("DELETE FROM detventadulce where idventa=".$_POST['idcancelar']);
	header("Location: ../forms/dulceventa.php");
 ?>
