<?php
include ('validarsesion.php');
//Primero recibimos las variables del formulario-------
$id=$_POST['txt_id'];
$titulo1=$_POST['txt_titulo1'];
$titulo2=$_POST['txt_titulo2'];
$url1=$_POST['txt_url1'];
$url2=$_POST['txt_url2'];
$orden=$_POST['txt_orden'];

if(isset($_POST['chk_visible'])){$visible=1;}else{$visible=0;}

//-------------------------------------------------------
//Luego hacemos la conexion a la base de datos--------
include ("../acciones/conect.php");
//----------------------------------------------------


//Preguntamos si el campo de la imagen se lleno con otro archivo
if($_FILES['txt_imagen']['name']!==""){
	/*desde aqui para la foto*/
	$destino="../foto_galeria/".$_FILES['txt_imagen']['name'];
	$extension=explode(".",$_FILES['txt_imagen']['name']);
	$tamanio=$_FILES['txt_imagen']['size'];
	if(strtoupper($extension[1])!==strtoupper("jpg") || $tamanio<500){
		echo "la foto no es jpg o el tamaño es mayor a 500kb";
		exit;
	}

	if(is_uploaded_file($_FILES['txt_imagen']['tmp_name'])){
		if(copy($_FILES['txt_imagen']['tmp_name'],$destino)){
            //aqui recuperamos dato para la foto si se encio por '$_FILE'
			$imagen=$_FILES['txt_imagen']['name'];
			//echo "el archivo se copio con exito";
		}else{
			echo "sucedio algun problema con el servidor";
		}
	}else{
		echo "el archivo no se subio al servidor";
	}
	/*-----------------------*/
}
else{
	$sql="SELECT idgaleria,imagen FROM tgaleria where idgaleria=$id";
	$consulta=mysql_query($sql,$conect);
	while($columna=mysql_fetch_array($consulta)){
	$imagen=$columna['imagen'];
	}
}


//Aqui creamos una consulta de insercion de datos y la guardamos en la variable $sql para poder utilizarla despues----
$sql="UPDATE tgaleria
SET
imagen='$imagen',
titulo1='$titulo1',
titulo2='$titulo2',
url1='$url1',
url2='$url2',
orden='$orden',
visible='$visible'

WHERE
idgaleria=$id;";
//Aqui es donde realizamos realmente la insercion de datos-------------

mysql_query($sql, $conect);

//Cierra la conexion a la base de datos------
mysql_close($conect);
// -------------------------------------------

//redirecciona la pagina-------------------------
echo "<SCRIPT LANGUAGE='javascript'>
location.href = 'galeria.php';
</SCRIPT>";

?>