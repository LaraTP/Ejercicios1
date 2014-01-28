<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

</head>
<body>
	<form name='form3' id='form3' method='POST' action='Form3.php'>
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
			
			$fich=new DomDocument("1.0", "UTF-8");
			$cliente = $fich->createElement('cliente');
			
			$cliente->appendChild( $fich->createElement('nombre', $nombre) );
			$cliente->appendChild( $fich->createElement('telefono', $telefono) );
			
			$fich->appendChild( $cliente );
			
			$xmlData = $fich->saveXML();
 
			$fich->formatOutput = true;
			$strings_xml = $fich->saveXML();
			$fich->save('archivoXML.xml');
 
			echo "Datos guardados en archivo XML";
		}
	?>
</body>
</html>