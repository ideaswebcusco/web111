<?php
//para contar los registros de la tabla
$showrecs = 10;//num registros por pagina
$pagerange = 5;//numero de agrupaciones de paginas
$consulta= mysql_query($sql,$link);
$total_registros = mysql_num_rows($consulta);
//--------------------------------------------------

//si existe la varieble pagina
if (!isset($pagina)){
echo "no se puede compaginar por falta de datos";}
//-----------------------------+

//---todos por metodo get
//para el orden-----------------
if (isset($_GET["orden"])){
$orden = $_GET["orden"];
}
else{
$orden ="id";
}
$sql.=" ORDER BY $orden";
//--------------------------------


//para el orden sea asendente o decendente
if (isset($_GET["a"])){
$a=$_GET['a'];
    if (!isset($_GET["modo"])){
		switch ($a){
		  case 0:
		    $modo=" ASC";
		    $a=1;
		    break;
		  case 1:
		    $modo=" DESC";
		    $a=0;
		    break;
		}
    }else{
		switch ($a){
		  case 0:
		    $modo=" DESC";
		    break;
		  case 1:
		    $modo=" ASC";
		    break;
		}
    }
}
else{
    $modo=" DESC";
    $a=0;
}

$sql.= " $modo";
//------------------------------

//para la paginacion
	  if (isset($_GET["page"])) {
	  $page = @$_GET["page"];
	  }else{$page = 1;}
	 //para ver cuantas paginas tendra
	  if ($total_registros % $showrecs != 0) {
	    $pagecount = intval($total_registros / $showrecs) + 1;
	  }
	  else {
	    $pagecount = intval($total_registros / $showrecs);
	  }

	  //para la paginacion
	  $startrec = $showrecs * ($page-1);
	  if ($startrec <= $total_registros) {
	  $sql.=" LIMIT $startrec,$showrecs;";}
//------------------

//-------------compaginacion------------------
function showpagenav($page, $pagecount){
	  global $orden;
	  global $a;
	  global $modo;
	  global $showrecs;
	  global $pagerange;
	  global $pagina;
if ($page > 1) { ?>
<a <?php echo "href='$pagina.php?orden=$orden&a=$a&modo=si";?>&page=<?php echo ($page - 1)."'"; ?>>&lt;&lt;&nbsp;Anterior</a>&nbsp;
<?php
}
  if ($pagecount > 1) {

  if ($pagecount % $pagerange != 0) {
    $rangecount = intval($pagecount / $pagerange) + 1;
  }
  else {
    $rangecount = intval($pagecount / $pagerange);
  }
  for ($i = 1; $i < $rangecount + 1; $i++) {
    $startpage = (($i - 1) * $pagerange) + 1;
    $count = min($i * $pagerange, $pagecount);

    if ((($page >= $startpage) && ($page <= ($i * $pagerange)))) {
      for ($j = $startpage; $j < $count + 1; $j++) {
        if ($j == $page) {
?>
<b><?php echo $j ?></b>
<?php } else { ?>
<a <?php echo "href='$pagina.php?page=$j&orden=$orden&a=$a&modo=si'";?>><?php echo $j; ?></a>
<?php } } } else { ?>
<a <?php echo "href='$pagina.php?page=$startpage&orden=$orden&a=$a&modo=si'";?>><?php echo $startpage ."..." .$count; ?></a>
<?php } } } ?>
<?php if ($page < $pagecount) { ?>
&nbsp;<a <?php echo "href='$pagina.php?orden=$orden&a=$a&modo=si";?>&page=<?php echo ($page + 1)."'"; ?>>Siguiente&nbsp;&gt;&gt;</a>&nbsp;
<?php
	}
}
//-------------------------------------------------//
?>