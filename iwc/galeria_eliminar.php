<?php
include ('validarsesion.php');
//Primero recibimos las variables del formaulario-------
$reg=$_GET['reg'];
$id=$reg;
//-------------------------------------------------------
//Luego hacemos la conexion a la base de datos--------
include ("../acciones/conect.php");
//----------------------------------------------------

//Aqui creamos una consulta de insercion de datos y la guardamos en la variable $sql para poder utilizarla despues----
$sql="
DELETE FROM tgaleria
WHERE
idgaleria = $id";
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