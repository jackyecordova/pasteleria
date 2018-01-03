

<?php 

include './conexion.php';
$mysqli->query("UPDATE dulces SET
	nombre='".$_POST['nombre']."',
	existencia='".$_POST['existencia']."',
	precio='".$_POST['precio']."'
	WHERE codigo=".$_POST['codigoeditar']

	)or die($mysqli->error);
header("Location: ../tables/dulcesinventario.php");
?>

