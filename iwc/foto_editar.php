<?php
include ('validarsesion.php');
include ('../acciones/conect.php');
include('fckeditor/fckeditor.php');

$reg=$_GET['reg'];
$id=$reg;
$sql="SELECT * FROM tfoto WHERE idfoto=$id";
$consulta=mysql_query($sql,$conect);
while($columna=mysql_fetch_array($consulta)){
	$codigo=$columna['idfoto'];
	$galeria=$columna['idgaleria'];
	$fotosmall=$columna['fotosmall'];
	$fotoenlarge=$columna['fotoenlarge'];		
	$titulo=$columna['titulo'];			
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
        	<b>FOTOS >> EDITAR</b>
        </div>
        <div align="center" style="color:#003; font-size:12px;">
		<?php echo "Usuario : ".$_SESSION["usuario"]; ?>
        </div>          
        </td>
      </tr>
      <tr>
        <td align="center">
        <button type="button" onclick="location.href = 'foto.php'"><img src="imagenes/cancelar.png"/><div>Volver</div></button>
        </td>
      </tr>
      <tr>
        <td>

        <form action="foto_editar_guardar.php" method="post" enctype="multipart/form-data">
        <table width="800" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="122">Titulo:</td>
            <td width="652" align="left"><input name="txt_titulo" type="text" value="<?php echo $titulo ?>" size="70" maxlength="50"/></td>
          </tr>
          <tr>
            <td valign="top">En galería:</td>
            <td align="left">
              <?php			
			$sql="SELECT idgaleria, titulo FROM tgaleria ORDER BY orden ASC";
			$consulta=mysql_query($sql,$conect);

			echo "<select name='cmb_idgaleria'>";
				while ($columna=mysql_fetch_array($consulta)){
					
					if ($galeria==$columna[0]){
						echo "<option value='$columna[idgaleria]' selected>$columna[titulo]</option>\r\n";
					}
					else{
						echo "<option value='$columna[idgaleria]'>$columna[titulo]</option>\r\n";
					}
				}
			echo "</select>";
			?>               
              <spam style="color:#F00; font-size:11px; font-family:Arial, Helvetica, sans-serif; font-weight:bold;">(*) Cambie si desea ubicar la FOTOGRAFIA en otro ALBUM</spam></td>
          </tr>
          <tr>
               <td valign="top">Thumbnails:</td>
               <td align="left">
               <img src="../foto_galeria/small/<?php echo $fotosmall;?>" width="100" height="100" border="1"/><br>
               <input name="txt_fotosmall" type="file" />
               Tamaño miniatura : 100px. X 100px. (imagen solo *.jpg)
               </td>
          </tr>
          <tr>
               <td valign="top">Enlarge:</td>
               <td align="left">
               <img src="../foto_galeria/enlarge/<?php echo $fotoenlarge;?>" width="220" height="150" border="1"/><br>
               <input name="txt_fotoenlarge" type="file" />
               Tamaño ampliado: 600px X 450px (*.jpg REFERENCIAL)
               </td>
          </tr>
          <tr>
            <td valign="top">Orden:</td>
            <td align="left">
            <input name="txt_orden" type="text" value="<?php echo $orden ?>"  size="5"/>
            <input type="hidden" name="txt_codigo" value=" <?php echo $id?>" />
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
              <input type="button" name="cerrarsesion" value="Cancelar" onClick="location.href='foto.php';">
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