<?php
session_start();
session_unset();
session_destroy();
//eliminar las cookies
$parametros_cookies = session_get_cookie_params();
setcookie(session_name(),0,1,$parametros_cookies["path"]);
//----
echo "<SCRIPT LANGUAGE='javascript'>
location.href = 'index.php';
</SCRIPT>"; // pagina donde logeas
?>