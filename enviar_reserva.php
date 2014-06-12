<?php
//Reservas ----
$nombre=$_POST['txt_nombre'];
$pais=$_POST['cmb_pais'];
$edad=$_POST['txt_edad'];
$telefono=$_POST['txt_telefono'];
$email=$_POST['txt_email'];
$fechallegada=$_POST['txt_calendario1'];
$fecharetorno=$_POST['txt_calendario2'];
$pasajero01=$_POST['txt_pasajero01'];
$pasajero02=$_POST['txt_pasajero02'];
$pasajero03=$_POST['txt_pasajero03'];
$pasajero04=$_POST['txt_pasajero04'];
$pasajero05=$_POST['txt_pasajero05'];
$tiposervicio=$_POST['cmb_tiposervicio'];
$comentario=$_POST['txt_comentario'];

/*--------------------------------*/

$encabezado="From: $nombre <$email>\r\n";
$cuerpo="
***************** Formulario de Reservas ******************
***********************************************************
Nombre : $nombre
Pais : $pais
Edad : $edad
Telefono : $telefono
Email : $email
Fecha de llegada : $fechallegada
Fecha de retorno : $fecharetorno
Pasajeros : $pasajero01, $pasajero02, $pasajero03, $pasajero04, $pasajero05
Tipo de Servicio : $tiposervicio
Comentario : $comentario

***********************************************************
***************** Reservas - desde la WEB *****************
***********************************************************";

//adonde se enviara
mail('reservas@villasanblas.com', 'WWW.VILLASANBLAS.COM - Reservas desde la web', $cuerpo, $encabezado);

//redirecciona la pagina-------------------------
echo "<SCRIPT LANGUAGE='javascript'>
location.href = 'http://www.villasanblas.com';
</SCRIPT>";
?>