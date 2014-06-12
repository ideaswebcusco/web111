<?php
include("validarsesion.php");
include ("../acciones/conect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA IWC v1.5</title>
<script language="javascript" src="utilidades/funciones.js" type="text/javascript"></script>
</head>

<body>
<table width="800" border="1" align="center" cellpadding="8" cellspacing="0">
  <tr>
    <td align="center">
    <table width="780" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td>
        <div align="center" style="color: #06C; font-size:14px">
        <b>GALERÍAS</b>
        </div>
        <div align="center" style="color:#003; font-size:12px;">
		<?php echo "Usuario : ".$_SESSION["usuario"]; ?>
        </div>         
        </td>
      </tr>
      <tr>
        <td align="center">
        <button type="button" onclick="location.href = 'galeria_nuevo.php'"><img src="imagenes/add.png"/><div>Agregar</div></button>
        <button type="button" onclick="location.href = 'control.php'"><img src="imagenes/cancelar.png"/><div>Volver</div></button>
		</td>
      </tr>
      <tr>
        <td>
        <table width="100%" border="1" align="center">
          <tr>
            <td width="3%" align="center" bgcolor="#CCCC99">Nº</td>
            <td width="83%" align="left" bgcolor="#CCCC99">Titulo de Galeria</td>
            <td width="7%" align="center" bgcolor="#CCCC99">Orden</td>
            <td width="7%" align="center" bgcolor="#CCCC99">Visible</td>            
            <td width="7%" align="center" bgcolor="#CCCC99">Editar</td>
            <td width="7%" align="center" bgcolor="#CCCC99">Eliminar</td>
          </tr>
<?php
//Esto Ocurre en caso de que no se haya enviado ninguna busqueda ................
$sql="SELECT * FROM tgaleria ORDER BY orden";
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
		if($columna[visible]==0){$estado="<b>NO</b>";}else{$estado="SI";}
		
		$i++;
		echo "<tr ".fondofila($i)." onmouseover=\"entrada(this)\" onmouseout=\"salida(this)\">";
		echo "<td align='center' valign='top'>$i</td>";
		echo "<td align='left' valign='top'>$columna[titulo2]</td>";
		echo "<td align='center' valign='top'>$columna[orden]</td>";
		echo "<td align='center' valign='top'>$estado</td>";		
		echo "<td align='center' valign='top'><a href='galeria_editar.php?id=$columna[0]'><img src='imagenes/editar.png' title='Editar >> $columna[titulo1]' width='20px' height='19px' border='0'></a></td>";
		echo "<td align='center' valign='top'><a href='galeria_eliminar.php?id=$columna[0]'><img src='imagenes/delete.png' title='Eliminar >> $columna[titulo1]' width='20px' height='19px' border='0'></a></td>";		
		echo "</tr>";
		}
?>
</table>
</table>
</table>
</body>
</html>