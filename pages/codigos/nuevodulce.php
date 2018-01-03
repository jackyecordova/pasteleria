<?php
	include './conexion.php';
	if (isset($_POST["nombre"]) 
		&& isset($_POST["codigo"]) 
		&& isset($_POST["existente"])
		&& isset($_POST["precio"]) 
					){
		# code...
		$nombre=$_POST['nombre'];
		$codigo	=$_POST['codigo'];
		$existente=$_POST['existente'];
		$precio=$_POST['precio'];
		
		$consulta="INSERT INTO dulces 
			values('$codigo',
				'$nombre',
				'$precio',
				'$existente',
				'imagen.jpg')";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location: ../tables/dulcesinventario.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>