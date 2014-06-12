<?php
include ('validarsesion.php');
//Primero recibimos las variables del formulario-------
$codigo=$_POST['txt_codigo'];
$titulo=$_POST['txt_titulo'];
$galeria=$_POST['cmb_idgaleria'];
$orden=$_POST['txt_orden'];

if(isset($_POST['chk_visible'])){
	$visible=1;
}
else{
	$visible=0;
}

//-------------------------------------------------------
//Luego hacemos la conexion a la base de datos--------
include ("../acciones/conect.php");
//----------------------------------------------------

//Preguntamos subimos el archivo de imagen de thumbnails
if($_FILES['txt_fotosmall']['name']!==""){
	/*desde aqui para la foto*/
	$destino1="../foto_galeria/small/".$_FILES['txt_fotosmall']['name'];
	$extension1=explode(".",$_FILES['txt_fotosmall']['name']);
	$tamanio1=$_FILES['txt_fotosmall']['size'];
	if(strtoupper($extension1[1])!==strtoupper("jpg") || $tamanio1<500){
		echo "la foto no es jpg o el tamaño es mayor a 500kb";
		exit;
	}

	if(is_uploaded_file($_FILES['txt_fotosmall']['tmp_name'])){
		if(copy($_FILES['txt_fotosmall']['tmp_name'],$destino1)){
            //aqui recuperamos dato para la foto si se encio por '$_FILE'
			$fotosmall=$_FILES['txt_fotosmall']['name'];
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
	$sql="SELECT idfoto,fotosmall FROM tfoto where idfoto=$codigo";
	$consulta=mysql_query($sql,$conect);
		while($columna=mysql_fetch_array($consulta)){
			$fotosmall=$columna['fotosmall'];
		}
}


//Preguntamos subimos el archivo de imagen de Enlarge
if($_FILES['txt_fotoenlarge']['name']!==""){
	/*desde aqui para la foto*/
	$destino2="../foto_galeria/enlarge/".$_FILES['txt_fotoenlarge']['name'];
	$extension2=explode(".",$_FILES['txt_fotoenlarge']['name']);
	$tamanio2=$_FILES['txt_fotoenlarge']['size'];
	if(strtoupper($extension2[1])!==strtoupper("jpg") || $tamanio2<500){
		echo "la foto no es jpg o el tamaño es mayor a 500kb";
		exit;
	}

	if(is_uploaded_file($_FILES['txt_fotoenlarge']['tmp_name'])){
		if(copy($_FILES['txt_fotoenlarge']['tmp_name'],$destino2)){
            //aqui recuperamos dato para la foto si se encio por '$_FILE'
			$fotoenlarge=$_FILES['txt_fotoenlarge']['name'];
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
	$sql="SELECT idfoto,fotoenlarge FROM tfoto where idfoto=$codigo";
	$consulta=mysql_query($sql,$conect);
		while($columna=mysql_fetch_array($consulta)){
			$fotoenlarge=$columna['fotoenlarge'];
		}
}

//Aqui creamos una consulta de insercion de datos y la guardamos en la variable $sql para poder utilizarla despues----
$sql="UPDATE tfoto
SET
idgaleria='$galeria',
fotosmall='$fotosmall',
fotoenlarge='$fotoenlarge',
titulo='$titulo',
orden='$orden',
visible='$visible'

WHERE
idfoto=$codigo;";

//Aqui es donde realizamos realmente la insercion de datos-------------

mysql_query($sql, $conect);

//Cierra la conexion a la base de datos------
mysql_close($conect);
// -------------------------------------------

//redirecciona la pagina-------------------------
echo "<SCRIPT LANGUAGE='javascript'>
location.href = 'foto.php';
</SCRIPT>";

?>