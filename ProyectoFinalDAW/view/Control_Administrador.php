<?php 
session_start();

if (isset($_SESSION["inicioSesion"])){
	$nick=$_SESSION["inicioSesion"];

}else{
	$nick=null;

}
if (isset($_SESSION["administrador"])){
	$admin=$_SESSION["administrador"];

}else{
	$admin=null;

}
?>
<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- viewport meta to reset iPhone inital scale -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<title>Manga's Umbrella Corporation</title>
		<!-------------------------------------------------- css3-mediaqueries.js for IE8 or older----------------------------->
		<link rel="shortcut icon" type="image/x-icon" href="../style/imagenes/favicon.ico" />
		<!-------------------------------------------------- css3-mediaqueries.js for IE8 or older----------------------------->
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<!------------------------------------------------------------ CSS------------------------------------------------>
		<link href="../style/style.css" rel="stylesheet" type="text/css" media="screen" />
		<!------------------------------------------------------------ Bootstra------------------------------------------------>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
		<!------------------------------------------------------------ JQUERY------------------------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<!------------------------------------------------------------ Java scrips ------------------------------------------------->
		<script src="../javaScrips/cargarUsuarios.js"></script>
		<!------------------------------------------------------------Coreusel------------------------------------------------->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
			<!------------------------------------------------------------NAV------------------------------------------------->
			<nav class="navbar navbar-inverse navbar-fixed-top">
		       			<ul>
					   <div id="logo"><li><a href="#"><img src="../style/imagenes/simbolo.png" id="medida1"></a>Manga's Umbrella Corporation</li></div>
					  <li><a href="../index.php" class="btn btn-info">Inicio</a></li>
					  <li><a href="mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="noticias.php" class="btn btn-info" >Noticias</a></li>
					   <?php if ($admin!=null){?>
					    <li><a href="#" class="btn btn-primary">Controll</a></li>
					   <?php }?>
				      <li id="loginContainer">
						<div class="btn-group">
					  <button type="button"  data-toggle="dropdown"  class="btn btn-info dropdown-toggle">
					   <span class="glyphicon glyphicon-user">&nbsp;</span><?php echo $nick;?><span class="caret"></span>
					  </button>
					 
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="../view/perfil_usuario.php">Ver mi perfil</a></li>
					    <li><a href="../controller/cerrar_sesion.php">Cerrar Sesion</a></li>
					  </ul>
					</div></li>
					 <!-- Login Ends Here -->
				</ul>
		    	</nav>
			<!------------------------------------------------------------ FINAL NAV------------------------------------------------->
			<!------------------------------------------------------------ HEADER------------------------------------------------->
			<div id="header">
				<div id="topc">
				<h3>Consola Administrador<h3>
				</div>
				<div id="fondosBlancos">
					 <h1>Des de aqui podras controlar varios aspectos de la web</h1>      
		 			<button type="button" class="btn btn-primary btn-lg">Subir Manga</button>
		 			<button type="button" class="btn btn-primary btn-lg" id="noticia">Subir Noticia</button>
		 			<button type="button" class="btn btn-primary btn-lg" id="administrar">Administrar Usuarios</button>
		 			<div id="contenido"></div>
				</div>
			</div>

			<!------------------------------------------------------------ FINAL HEADER------------------------------------------------->
			
			<!------------------------------------------------------------FOOTER------------------------------------------------->
			<footer>
				<p>&copy; Designet and Created by Judit Cerdà Izquierdo and Ibis Emmanuel</p>
			</footer>
			<!------------------------------------------------------------FINAL FOOTER------------------------------------------------->
		</div>
		<!------------------------------------------------------------  FINAL PAGEWRAP------------------------------------------------->

	</body>
</html>

