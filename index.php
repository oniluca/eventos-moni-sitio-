<?php 
	include_once('modulos/enrutador.php');
	include_once('modulos/controlador.php');

 ?>

 <html>
 	<head>
 		<meta charset="utf-8"/>
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Eventos Moni</title>

 		<script type="text/javascript" src="js/jquery.min.js"></script>
 		<script type="text/javascript" src="js/jquery-latest.min.js"></script>
 		<script type="text/javascript" src="js/bootstrap.min.js"></script>
 		<script type="text/javascript" src="js/bootstrap.js"></script>

		<link rel="shortcut icon" type="image/png" href="imagen/logo2.png">
 		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 		<link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
 		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
 		<link rel="stylesheet" type="text/css" href="css/lightbox.css">
 		<link rel="stylesheet" type="text/css" href="css/estilos.css">
 		<link rel="stylesheet" type="text/css" href="css/fuentes.css">
	</head>

 	<body class="fondo">
 		<header>
 			<nav role="navigation"	class="navbar navbar-default">
 				<a class="navbar-brand" href="index.php"><img src="imagen/logo2.png" width="100" class="logo2"></a>
 				<div class="navbar-header">
 					<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
	 			</div>	 			

	 			<div id="navbarCollapse" class="collapse navbar-collapse Raleway">
	 				<ul class="nav navbar-nav">
	 					<li><a href="index.php">Inicio</a></li>
	 					<li><a href="?cargar=servicios">Servicios</a></li>
	 					<li><a href="?cargar=galeria">Galeria</a></li>
	 					<li><a href="?cargar=contacto">Contacto</a></li>
	 				</ul>
	 			</div>
 			</nav> 		
 		</header>

 		<div id="navbarSocialCollapse" class="collapse navbar-collapse">
			<div class="social">
				<ul>			
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-facebook "> <span class = "fa fa-facebook"> </ span></a></li>
					<li><a href="https://twitter.com/?status=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-twitter "> <span class = "fa fa-twitter"> </ span></a></li>
					<li><a href="https://plus.google.com/share?url=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-google "> <span class = "fa fa-google"> </ span></a></li>
					<li><a href="http://pinterest.com/pin/create/button/?media=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-pinterest "> <span class = "fa fa-pinterest"> </ span></a></li>
					<li><a href="http://pinterest.com/pin/create/button/?media=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-instagram "> <span class = "fa fa-instagram"> </ span></a></li>
					<li><a href="whatsapp://send?text= http://www.eventosmoni.com/" data-action="share/whatsapp/share" target="_blank" class="btn btn-social-icon  btn-whatsapp"> <span class = "fa fa-whatsapp"> </ span><img  src=""></a></li>
				</ul>
			</div>
		</div>
		
		<!--boton responsive redes sociales-->
 		<div class="navbar-header">
			<button type="button" data-target="#navbarSocialCollapse" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-facebook "> <span class = "fa fa-facebook"> </span></a>
				<a href="https://twitter.com/?status=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-twitter "> <span class = "fa fa-twitter"> </span></a>
				<a href="https://plus.google.com/share?url=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-google "> <span class = "fa fa-google"> </span></a>
				<a href="http://pinterest.com/pin/create/button/?media=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-pinterest "> <span class = "fa fa-pinterest"> </span></a>
				<a href="http://pinterest.com/pin/create/button/?media=https://www.eventosmoni.com" target="_blank" class="btn btn-social-icon  btn-instagram "> <span class = "fa fa-instagram"> </span></a>
				<a href="whatsapp://send?text= http://www.eventosmoni.com/" data-action="share/whatsapp/share" target="_blank" class="btn btn-social-icon  btn-whatsapp"> <span class = "fa fa-whatsapp"> </span><img  src=""></a>
			</button>
		</div>
 		
 		<section>
 				<?php 
 					$enrutador=new Enrutador();
 					if ($enrutador->validarGet(isset($_GET["cargar"]))) {
 						$enrutador->cargarVista($_GET["cargar"]);
 					}
 				 ?>
 		</section>
 		
 		<aside>
 			
 		</aside>

 		<footer>
 			<div class="footer">
 				<section>
 					<?php
 						include_once("vistas/footer.php");
 					  ?>
 				</section>
 				
 			</div>
 			
 		</footer>

 		<script type="text/javascript" src="js/lightbox.js"></script>

 	</body>

 </html>