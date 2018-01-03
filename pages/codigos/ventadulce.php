<?php
	include './conexion.php';
		
	
		$codigo=$_POST['codigoagregar'];
		$precio=$_POST['precioagregar'];
		//$cantidad=$_POST['cantidad'];
		$novent=$_POST['idventaagregar'];
		
		$consulta="INSERT INTO detventadulce 
			values(0,
				'$codigo',
				'$novent',
				'1',
				'precio')";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location: ../forms/dulceventa.php");


  ?>