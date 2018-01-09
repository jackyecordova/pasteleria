<?php
	include './conexion.php';
		
	$venta=$mysqli->query("select MAX(idventa) AS id from ventadulce")or die($mysqli->error);
    $ventadulce=$venta->fetch_assoc();
                  $noventa=$ventadulce['id'];
                  $novent=$noventa +1;

		$codigo=$_POST['codigoagregar'];
		$precio=$_POST['precioagregar'];
		//$cantidad=$_POST['cantidad'];
		//$novent=$_POST['idventaagregar'];
		$nombre=$_POST['nombreagregar'];
		
		$consulta="INSERT INTO detventadulce 
			values(0,
				'$codigo',
				'$nombre',
				'$novent',
				'1',
				'$precio')";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location: ../forms/dulceventa.php");


  ?>