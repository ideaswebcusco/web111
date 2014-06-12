<?php
include ('validarsesion.php');
include ('../acciones/conect.php');

$id=$_GET['id'];
$sql="SELECT * FROM tbanner WHERE idbanner=$id";
$consulta=mysql_query($sql,$conect);
while($columna=mysql_fetch_array($consulta)){
	$codigo=$columna['idbanner'];
	$imagen=$columna['imagen'];	
	$titulo1=$columna['titulo1'];
	$titulo2=$columna['titulo2'];
	$descripcion1=$columna['descripcion1'];
	$descripcion2=$columna['descripcion2'];
	$link1=$columna['link1'];		
	$link2=$columna['link2'];		
	$orden=$columna['orden'];			
	$visible=$columna['visible'];	
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
        	<b>BANNER >> EDITAR</b>
        </div>
        <div align="center" style="color:#003; font-size:12px;">
		<?php echo "Usuario : ".$_SESSION["usuario"]; ?>
        </div>          
        </td>
      </tr>
      <tr>
        <td align="center">
        <button type="button" onclick="location.href = 'banner.php'"><img src="imagenes/cancelar.png"/><div>Volver</div></button>
        </td>
      </tr>
      <tr>
        <td>

        <form action="banner_editar_guardar.php" method="post" enctype="multipart/form-data">
        <table width="800" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
<td width="122">Titulo (English):</td>
<td width="652" align="left"><input name="txt_titulo1" type="text" size="95" maxlength="50" value="<?php echo $titulo1?>"/></td>
</tr>
<tr>
<td>Titulo (Spanish):</td>
<td align="left"><input name="txt_titulo2" type="text" size="95" maxlength="50" value="<?php echo $titulo2?>"/></td>
</tr>
<tr>
<td valign="top">Descripción (English):</td>
<td align="left"><textarea name="txt_descripcion1" cols="73" rows="2"><?php echo $descripcion1?></textarea></td>
</tr>
<tr>
<td valign="top">Descripción (Spanish):</td>
<td align="left"><textarea name="txt_descripcion2" cols="73" rows="2"><?php echo $descripcion2?></textarea></td>
</tr>
<tr>
<td valign="top">Link (English):</td>
<td align="left"><input name="txt_link1" type="text" size="95" value="<?php echo $link1?>"/></td>
</tr>
<tr>
<td valign="top">Link (Spanish):</td>
<td align="left"><input name="txt_link2" type="text" size="95" value="<?php echo $link2?>"/></td>
</tr>
          <tr>
            <td valign="top">Imagen:</td>
            <td align="left">
              <img src="../slider_banner/data1/images/<?php echo $imagen;?>" width="375" height="150" border="1"/><br>
              <input name="txt_imagen" type="file" />
              Tamaño: 970px. X 400px. (imagen solo *.jpg)
              </td>
          </tr>
          <tr>
            <td valign="top">Orden:</td>
            <td align="left">
              <input name="txt_orden" type="text" value="<?php echo $orden ?>" size="5"/>
              <input type="hidden" name="txt_id" value=" <?php echo $id?>" />
              </td>
          </tr>
          <tr>
            <td valign="top">Visible:</td>
            <td align="left">
			<?php
				if($visible==0){
					$marcado="";
					}
				else{
					$marcado="checked";
					}
			?>
              <input type="checkbox" name="chk_visible" <?php echo $marcado?>/>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left">
              <input type="submit" name="button" id="button" value="Guardar" />
              <input type="button" name="cerrarsesion" value="Cancelar" onClick="location.href='banner.php';">
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