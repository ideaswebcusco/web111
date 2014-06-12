<?php
include ('validarsesion.php');
//Primero recibimos las variables del formulario-------
$titulo1=$_POST['txt_titulo1'];
$titulo2=$_POST['txt_titulo2'];
$descripcion1=$_POST['txt_descripcion1'];
$descripcion2=$_POST['txt_descripcion2'];
$link1=$_POST['txt_link1'];
$link2=$_POST['txt_link2'];
//aqui deberia de ser la foto
$orden=$_POST['txt_orden'];
if(isset($_POST['chk_visible'])){$visible=1;} else{$visible=0;}

//Preguntamos subimos el archivo de imagen11111
if($_FILES['txt_imagen']['name']!==""){
	/*desde aqui para la foto*/
	$destino1="../slider_banner/data1/images/".$_FILES['txt_imagen']['name'];
	$extension1=explode(".",$_FILES['txt_imagen']['name']);
	$tamanio1=$_FILES['txt_imagen']['size'];
	if(strtoupper($extension1[1])!==strtoupper("jpg") || $tamanio1<500){
		echo "la foto no es jpg o el tamaño es mayor a 500kb";
		exit;
	}

	if(is_uploaded_file($_FILES['txt_imagen']['tmp_name'])){
		if(copy($_FILES['txt_imagen']['tmp_name'],$destino1)){
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

//-------------------------------------------------------
//Luego hacemos la conexion a la base de datos--------
include ("../acciones/conect.php");
//----------------------------------------------------

//Aqui creamos una consulta de insercion de datos y la guardamos en la variable $sql para poder utilizarla despues----
$sql="INSERT INTO tbanner(imagen,titulo1,titulo2,descripcion1,descripcion2,link1,link2,orden,visible)
VALUES ('$imagen','$titulo1','$titulo2','$descripcion1','$descripcion2','$link1','$link2','$orden','$visible')";

//Aqui es donde realizamos realmente la insercion de datos-------------

mysql_query($sql, $conect);

//Cierra la conexion a la base de datos------
mysql_close($conect);
// ------------------------------------------

//redirecciona la pagina---------------------
echo "<SCRIPT LANGUAGE='javascript'>
location.href = 'banner.php';
</SCRIPT>";

?>