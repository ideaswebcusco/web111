<?php
if(!($conect=mysql_connect("mysql511.ixwebhosting.com","C284980_ruben","SantaTE2014"))){
	die ("No se encontro el Servidor de BD"	);
}
if (!mysql_select_db("C284980_santateresacusco",$conect)){
	die ("No se encontro la BD");
}
?>
