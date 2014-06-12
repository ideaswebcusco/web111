<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">

    <div class="ws_images">
        <ul>
        	<?php
			$sql="SELECT * FROM tbanner WHERE (visible!=0) ORDER BY orden ASC";
			$exe=mysql_query($sql,$conect);
			while($fila=mysql_fetch_array($exe)){
				echo "<li><a href='$fila[link1]' target='_blank'><img src='slider_banner/data1/images/$fila[imagen]' alt='$fila[titulo1]' title='$fila[titulo1]' id='wows1_0'/></a>$fila[descripcion1]</li>";
				}
			
			?>
            <!--
            <li><a href="www.google.com" target="_blank"><img src="slider_banner/data1/images/1.jpg" alt="banner1" title="Titulo de la foto 1" id="wows1_0"/></a>Esta es la descripcion del banner 1</li>
            <li><a href="www.google.com" target="_blank"><img src="slider_banner/data1/images/2.jpg" alt="banner2" title="Titulo de la foto 2" id="wows1_1"/></a>Esta es la descripcion del banner 2</li>
            <li><a href="www.google.com" target="_blank"><img src="slider_banner/data1/images/3.jpg" alt="banner3" title="Titulo de la foto 3" id="wows1_2"/></a>Esta es la descripcion del banner 3</li>
            <li><a href="www.google.com" target="_blank"><img src="slider_banner/data1/images/4.jpg" alt="banner4" title="Titulo de la foto 4" id="wows1_3"/></a>Esta es la descripcion del banner 4</li>
            -->
        </ul>
    </div>
    
</div>
<script type="text/javascript" src="slider_banner/engine1/wowslider.js"></script>
<script type="text/javascript" src="slider_banner/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->