<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

</head>
<body>
	<form name='form2' id='form2' method='POST' action='Form2.php'>
		<label>Nombre: </label>
		<input type="text" name="nombre" id="nombre"/>
		</br>
		<label>Tel&eacute;fono: </label>
		<input type="text" name="telefono" id="telefono"/>
		</br>
		<input type="submit" name="enviar" id="enviar" value="Enviar"/>
	</form>

	<?PHP
	
		if(isset($_POST['enviar'])=='Enviar'){
		
			$nombre=$_POST['nombre'];
			$telefono=$_POST['telefono'];
			
			$conector= mysql_connect('localhost', 'root','') or die ('problema conectando porque :' . mysql_error());
						
			mysql_select_db ('prueba', $conector);
			$query="INSERT INTO cliente (nombre,telefono) VALUES ('$nombre',$telefono)";
							
			$respuesta= mysql_query($query,$conector);
			
			if($respuesta){
				echo "<p>Los datos se han introducido correctamente</p>";	
				
			}
			else{
				echo "No se han podido guardar los datos";
			}
			
		}
	?>
</body>
</html>