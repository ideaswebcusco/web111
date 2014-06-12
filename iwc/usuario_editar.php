<?php
include ('validarsesion.php');
include ('../acciones/conect.php');
$reg=$_GET['reg'];
$id=$reg;
$sql="SELECT * FROM tusuario WHERE idusuario=$id";

$consulta=mysql_query($sql,$conect);
while($columna=mysql_fetch_array($consulta)){
	$nombre=$columna['nombre'];
	$contrasena=$columna['contrasena'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA IWC v1.5</title>
</head>

<body>
<table width="800" border="1" align="center" cellpadding="8" cellspacing="0">
  <tr>
    <td align="center"><table width="780" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td>
        <div align="center" style="color: #06C; font-size:14px">
        	<b>USUARIOS >> EDITAR</b>
        </div>
        <div align="center" style="color:#003; font-size:12px;">
		<?php echo "Usuario : ".$_SESSION["usuario"]; ?>
        </div>        
        </td>
      </tr>
      <tr>
        <td align="center">
        <button type="button" onclick="location.href = 'usuario.php'"><img src="imagenes/cancelar.png"/><div>Volver</div></button>
        </td>
      </tr>
      <tr>
        <td>

        <form action="usuario_editar_guardar.php" method="post">
        <table width="555" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="158">Nombre de Usuario:</td>
            <td width="381" align="left"><input name="txt_nombre" type="text" size="30" value="<?php echo $nombre?>"/></td>
          </tr>
          <tr>
            <td>Contraseña:</td>
            <td align="left">
            <input name="txt_contrasena" type="password" size="30" id="txt_contrasena" value="<?php echo $contrasena?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left">
              <input type="submit" name="button" id="button" value="Guardar" />
              <input type="button" name="cerrarsesion" value="Cancelar" onClick="location.href='usuario.php';">
              <input type="hidden" name="txt_codigo" value=" <?php echo $id?>" /></td>
          </tr>
        </table>
        </form>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>