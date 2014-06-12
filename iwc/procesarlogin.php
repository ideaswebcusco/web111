<?php
if ($_POST) {
	session_start(); //Iniciamos la funcion de sesiones...
	$nombre=$_POST['txt_nombre'];
	$contrasena=$_POST['txt_contrasena'];

	include('../acciones/conect.php');//Incluimos el archivo de conexion...

	$sql="SELECT * FROM tusuario";
 	$result=mysql_query($sql,$conect); //La variable $link esta declarada en el archivo conect.php...

 	$usuario=false;

 	while ($fila = mysql_fetch_array($result)) {
 		if ($nombre==$fila['nombre']) {

 		$usuario=true;

 			if ($contrasena==$fila['contrasena']) {
     			$_SESSION['usuario']=$nombre;
     			header ('location: control.php');
    		}
    		else {
    			echo "
    			<SCRIPT LANGUAGE='javascript'>
				location.href = 'index.php';
				</SCRIPT>
				"; // envia error de contraseña
				$usuario=false;
    		}

   		}

  	}

  	if ($usuario!=true){
   			echo "<SCRIPT LANGUAGE='javascript'>
					location.href = 'index.php';
					</SCRIPT>"; // envia error de usuario incorrecto.

   	}
  	mysql_free_result($result); //limpiamos la memoria
}
else {
	echo "<SCRIPT LANGUAGE='javascript'>
	alert('No es un Usuario Autorizado');
	location.href = '../';
	</SCRIPT>"; // envia error de usuario no autorizado por mal acceso via URL...
}
?>