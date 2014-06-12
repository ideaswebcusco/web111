<?php
include ('validarsesion.php');
include ('../acciones/conect.php');
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
        	<b>GALERIAS >> AGREGAR NUEVO</b>
        </div>
        <div align="center" style="color:#003; font-size:12px;">
		<?php echo "Usuario : ".$_SESSION["usuario"]; ?>
        </div>          
        </td>
      </tr>
      <tr>
        <td align="center">
        <button type="button" onclick="location.href = 'galeria.php'"><img src="imagenes/cancelar.png"/><div>Volver</div></button>
        </td>
      </tr>
      <tr>
        <td>

        <form action="galeria_nuevo_guardar.php" method="post" enctype="multipart/form-data">
        <table width="800" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="122">Titulo (English):</td>
            <td width="652" align="left"><input name="txt_titulo1" type="text" size="40" maxlength="50"/> 
            Tags:
              <input name="txt_url1" type="text" size="40" maxlength="50"/></td>
          </tr>
          <tr>
<td>Titulo (Spanish):</td>
<td align="left"><input name="txt_titulo2" type="text" size="40" maxlength="50"/>
Tags:
<input name="txt_url2" type="text" size="40" maxlength="50"/></td>
</tr>
<tr>
  <td valign="top">Portada Album:</td>
  <td align="left"><input name="txt_imagen" type="file" />
    Tamaño: 198px. X 160px. (imagen solo *.jpg)
    </td>
</tr>
          <tr>
            <td valign="top">Orden:</td>
            <td align="left"><input name="txt_orden" type="text" size="5"/></td>
          </tr>
          <tr>
            <td valign="top">Visible:</td>
            <td align="left"><input type="checkbox" name="chk_visible"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left">
              <input type="submit" name="button" id="button" value="Guardar" />
              <input type="button" name="cerrarsesion" value="Cancelar" onClick="location.href='galeria.php';">
              </td>
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