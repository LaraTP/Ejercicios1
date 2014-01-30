function enviarDatosEmpleado(){

  nombre=document.form4.nombre.value;
  telefono=document.form4.telefono.value;

  ajax=objetoAjax();

  ajax.open("POST", "registro.php",true);
  ajax.onreadystatechange=function() {
  	if (ajax.readyState==3) {
		divResultado.innerHTML = ajax.responseText
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("nombre="+nombre+"&telefono="+telefono)
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.form4.nombre.value="";
  document.form4.telefono.value="";
  document.form4.nombre.focus();
}