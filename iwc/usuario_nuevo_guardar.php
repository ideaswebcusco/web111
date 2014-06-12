<?php
include ('validarsesion.php');
//Primero recibimos las variables del formaulario-------

$nombre=$_POST['txt_nombre'];
$contrasena=$_POST['txt_contrasena'];

//-------------------------------------------------------
//Luego hacemos la conexion a la base de datos--------
include ("../acciones/conect.php");
//----------------------------------------------------

//Aqui creamos una consulta de insercion de datos y la guardamos en la variable $sql para poder utilizarla despues----
$sql="INSERT INTO tusuario(nombre,contrasena)
VALUES ('$nombre','$contrasena')";
//Aqui es donde realizamos realmente la insercion de datos-------------

mysql_query($sql, $conect);

//Cierra la conexion a la base de datos------
mysql_close($conect);
// -------------------------------------------

//redirecciona la pagina-------------------------
echo "<SCRIPT LANGUAGE='javascript'>
location.href = 'usuario.php';
</SCRIPT>";
?>