<?php
include("validarsesion.php");
include ("../acciones/conect.php");
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
    <td><table width="780" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td>
        <div align="center" style="color: #06C; font-size:14px">
        	<b>USUARIOS</b>
        </div>
        <div align="center" style="color:#003; font-size:12px;">
		<?php echo "Usuario : ".$_SESSION["usuario"]; ?>
        </div>       
        </td>
      </tr>
      <tr>
        <td align="center">
        <button type="button" onclick="location.href = 'usuario_nuevo.php'"><img src="imagenes/add.png"/><div>Agregar</div></button>
        <button type="button" onclick="location.href = 'control.php'"><img src="imagenes/cancelar.png"/><div>Volver</div></button>
        </td>
      </tr>
      <tr>
        <td>
<table width="100%" border="1" align="center">
          <tr>
            <td width="5%" align="center" bgcolor="#CCCC99">Nº</td>
            <td width="51%" align="left" bgcolor="#CCCC99">Nombre</td>
            <td width="13%" align="center" bgcolor="#CCCC99">Contrasena</td>
            <td width="10%" align="center" bgcolor="#CCCC99">Editar</td>
            <td width="10%" align="center" bgcolor="#CCCC99">Eliminar</td>
          </tr>
<?php
//Esto Ocurre en caso de que no se haya enviado ninguna busqueda ................
$sql="SELECT idusuario, nombre, contrasena
		FROM tusuario WHERE (idusuario!=1) ORDER BY idusuario";
	$consulta=mysql_query($sql,$conect);
	function fondofila($num){
		if($num % 2){
		return "bgcolor='white'";
		}
		else{
		return "bgcolor='#EFEFEF'";
		}

	}
	$i=0;
	while ($columna=mysql_fetch_array($consulta)){
		$i++;
		echo "<tr ".fondofila($i)." onmouseover=\"entrada(this)\" onmouseout=\"salida(this)\">";
		echo "<td align='center' valign='top'>$i</td>";
		echo "<td align='left' valign='top'>$columna[nombre]</td>";
		echo "<td align='center' valign='top'>&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</td>";
		echo "<td align='center' valign='top'><a href='usuario_editar.php?reg=$columna[0]'><img src='imagenes/editar.png' alt='Haga click para EDITAR' width='20px' height='19px' border='0'></a></td>";
		echo "<td align='center' valign='top'><a href='usuario_eliminar.php?reg=$columna[0]'><img src='imagenes/eliminar.png' alt='Haga click para ELIMINAR' width='20px' height='19px' border='0'></a></td>";
		echo "</tr>";
		}
?>
</table>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>