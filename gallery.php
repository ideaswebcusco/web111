<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
mb_http_input("utf-8");
mb_http_output("utf-8");
?>
<title>SANTA TERESA - Hostal Cusco</title>

<link href="pics/ico.jpg" rel="shortcut icon" />

<!-- open@Metas -->
<META NAME="TITLE" CONTENT="Hostal SANTA TERESA - Cusco">
<META NAME="DESCRIPTION" content="House hosting 'Santa Teresa' in the city of Cusco, welcomes you and gives you a good rest and comfort in Cusco.">
<meta name="ROBOTS" content="INDEX,FOLLOW">
<meta name="resource-type" content="document">
<meta http-equiv="expires" content="0">
<meta name="author" content="www.ideaswebcusco.com">
<meta name="copyright" content="Copyright (c) 2014 Hostal Santa Teresa Cusco">
<meta name="revisit-after" content="1 days">
<meta name="distribution" content="Global">
<meta name="generator" content="www.santateresacusco.com">
<meta name="rating" content="General">
<!-- close@Metas -->

<link href="css/base.css" rel="stylesheet" type="text/css">

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="slider_banner/engine1/style.css" />
<script type="text/javascript" src="slider_banner/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<!-- SEGUIMIENTO DE GOOGLE analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51056381-1', 'santateresacusco.com');
  ga('send', 'pageview');

</script>
<!-- SEGUIMIENTO DE GOOGLE analytics-->

<?php include("acciones/conect.php");?>


<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?28aYvjIGBAkk8Cj1AC9CFKuFlUu25MML';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</head>

<body>

<!-- open@CONTENEDOR -->
<div id="contenedor">
	
    <!-- open@HEADER -->
	<header>
    	
        <!-- open@capacabecera -->
        <div id="capacabecera">
        	<?php include('includes/cabecera.php');?>
        </div>
        <!-- close@capacabecera -->
        
        <!-- open@capamenusuperior -->
        <nav id="capamenusuperior">
		  <?php include('includes/menusuperior.php');?>   
        </nav>
        <!-- close@capamenusuperior -->
        
    </header>
    <!-- close@HEADER -->
    
    <!-- open@BANNER -->

    <!-- close@BANNER -->
    
    <!-- open@SECTION -->
    <section>
    	
        <!-- open@capaizquierdo -->
    	<div id="capaizquierdo">
        	<?php include('includes/izquierdo.php');?>          
   	  	</div>
        <!-- close@capaizquierdo -->

		<!-- open@capamedio -->
    	<div id="capamedio">
        
        	<!-- open@CONTENIDO ************************************************************* -->

            <div style="font-size:24px; font-weight:bolder; margin:5px 0; padding:5px 20px; color:#F60; background:#F5F0AD; border-radius:15px;">Photo Gallery</div> 

            <!-- open@Slimbox -Galeria de fotos -->
                <script type="text/javascript" src="slimbox/mootools.js"></script>
                <script type="text/javascript" src="slimbox/slimbox.js"></script>
                <link rel="stylesheet" href="slimbox/slimbox.css" type="text/css" media="screen" />
            <!-- close@Slimbox -Galeria de fotos -->   
                                            
                
			<?php
            if($_GET[g]){
                $Ngaleria=$_GET[g];	
                $sqlfoto="SELECT idfoto,idgaleria,fotosmall,fotoenlarge,titulo1,orden,visible FROM tfoto WHERE (idgaleria=$Ngaleria and visible=1) ORDER BY orden ASC";
                $exefoto=mysql_query($sqlfoto,$conect);
                echo "<div class='titulo_noticias'>$_GET[tg]</div>";
                while($filafoto=mysql_fetch_array($exefoto)){
                    echo "
                        <div id='cuadro_foto'>
                            <a href='foto_galeria/enlarge/$filafoto[fotoenlarge]' rel='lightbox[HOSTALSANTATERESA]' alt='$filafoto[titulo1]' title='$filafoto[titulo]'>
                            <img class='zoom' src='foto_galeria/small/$filafoto[fotosmall]' width='100' height='100' border='1px'>
                            </a>							
                        </div>    					 
                         ";
                }		
                echo "<div class='ver_noticias'><a href='gallery.php'>&raquo; VER TODOS LOS ALBUM DE FOTOS</a></div>";					
            }
            
            else{
                $sqlgaleria="SELECT idgaleria,imagen,titulo1,orden,visible FROM tgaleria WHERE (visible=1) ORDER BY orden ASC";
                $exegaleria=mysql_query($sqlgaleria,$conect);
                while($filagaleria=mysql_fetch_array($exegaleria)){
                    echo "
                        <div id='cuadro_galeria'>
                            <a href='gallery.php?g=$filagaleria[idgaleria]&tg=$filagaleria[titulo1]'><img src='foto_galeria/$filagaleria[imagen]' width='198' height='160' /></a>
                            <div class='titulo_galeria'><a href='gallery.php?g=$filagaleria[idgaleria]&tg=$filagaleria[titulo1]'>$filagaleria[titulo1]</a></div>
                        </div> 						 
                         ";
                }						
            
            }            
            ?>			

            <!-- close@CONTENIDO ************************************************************* -->
            
        </div> 
        <!-- close@capamedio -->
        
        <!-- open@capaderecho -->
    	<div id="capaderecho">
        	<?php include('includes/derecho.php');?>                                 
   		</div>
        <!-- close@capaderecho -->
        
        <div style="clear:both;"></div> 
                       
    </section>
    <!-- close@SECTION -->
    
    <div style="clear:both;"></div>
    
    <!-- open@FOOTER -->
    <footer>
    	<?php include('includes/pie.php');?>
    </footer>
    <!-- close@FOOTER -->
    
</div>
<!-- close@CONTENEDOR -->

</body>
</html>
