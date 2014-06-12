<?php
include("validarsesion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA IWC v1.5</title>
<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="800" border="1" align="center" cellpadding="8" cellspacing="0">
  <tr>
    <td align="center"><table width="790" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td>
        <div align="center" style="color: #06C; font-size:14px">
        	<b>PANEL DE ADMINISTRACION</b>
        </div>
        <div align="center" style="color:#003; font-size:12px;">
		<?php echo "Bienvenido : ".$_SESSION["usuario"]; ?>
        </div>
        </td>
      </tr>
      <tr>
        <td align="center">
          <button type="button" onclick="location.href = 'usuario.php'"><img src="imagenes/usuarios.png"/><div>Usuarios</div></button>         
          <button type="button" onclick="location.href = 'banner.php'"><img src="imagenes/banners.png"/><div>Banner</div></button>            
          <button type="button" onclick="location.href = 'galeria.php'"><img src="imagenes/galerias.png"/><div>Galeria de Fotos</div></button>
          <button type="button" onclick="location.href = 'foto.php'"><img src="imagenes/fotos.png"/><div>Fotos</div></button>                    
          <br /><hr />
          <button type="button" onclick="window.open('https://dashboard.zopim.com/')"><img src="imagenes/chat.png"/><div>Chat</div></button>         
        <button type="button" onclick="window.open('https://webmail.opentransfer.com/')"><img src="imagenes/webmail.png"/><div>Mail</div></button>
          <button type="button" onclick="window.open('http://www.ideaswebcusco.com/manualsistema-iwc')"><img src="imagenes/info.png"/><div>FAQ<br>
          </div></button>
          <button type="button" onclick="location.href = 'cerrarsesion.php'"><img src="imagenes/cerrar.png"/><div>Cerrar<br>
          </div></button>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>