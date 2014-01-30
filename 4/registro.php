<?php

	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
			
	$conector = mysql_connect('localhost', 'root','') or die ('problema conectando porque :' . mysql_error());
	mysql_select_db ('prueba', $conector);
	
	$query = "INSERT INTO cliente (nombre,telefono) VALUES ('$nombre',$telefono)";
	$respuesta = mysql_query($query,$conector);

?>

			
