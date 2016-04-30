<!-- 
Esta es la página principal.
Esta dividida en diferentes partes:
HEAD: donde se crean los diferentes enlaces a librerías, hojas de estilos, javascripts ...
BODY: esta dividido también en diferentes en las que podemos encontrar: Barra de navegación, header, secciones (divididas en derecha e izquierda) que a su vez tienen artículos .. Con tal de crear un HTML5

Enlaces con los que conecta index.php:
-javaScrips/calendario.js
-javaScrips/login.js
-->
<?php 
session_start();

if (isset($_SESSION["inicioSesion"])){
	$nick=$_SESSION["inicioSesion"];

}else{
	$nick=null;

}
?>
<!DOCTYPE html> 
<html lang="en">
	<!-------------------------------------------------- HEAD----------------------------->
	<head>
		<meta charset="utf-8">
		<!-- viewport meta to reset iPhone inital scale -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<title>Manga's Umbrella Corporation</title>
		<!-------------------------------------------------- Fabicon----------------------------->
		<link rel="shortcut icon" type="image/x-icon" href="style/imagenes/favicon.ico" />
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
		<!------------------------------------------------------------Coreusel------------------------------------------------->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!------------------------------------------------------------ Java scrips ------------------------------------------------->
		<script src="../javaScrips/cargarDatos.js" type="text/javascript"></script>	
	</head>
	<!-------------------------------------------------- FINAL HEAD----------------------------->
	<body>
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
			<!------------------------------------------------------------NAV------------------------------------------------->
			<nav class="navbar navbar-inverse navbar-fixed-top">
		       			<ul>
					   <div id="logo"><li><a href="#"><img src="../style/imagenes/simbolo.png" id="medida1"></a>Manga's Umbrella Corporation</li></div>
					  <li><a href="../index.php"  class="btn btn-info">Inicio</a></li>
					  <li><a href="mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="noticias.php" class="btn btn-info">Noticias</a></li>
					   <?php if ($nick==null){?>
					  <li><a href="view/registrarse.php" class="btn btn-info">Registrate</a></li>
					   <!-- Login Starts Here -->
					   
						<li id="login">
					    <div id="loginContainer">
						<div id="loginButton">
						<a href="#" id="loginButton" class="btn btn-warning"><span>Login</span><em></em></a>
						<div style="clear:both"></div>
						<div id="loginBox">
						    <form id="loginForm" action="controller/login.php" method="post" name="login_form">
							<fieldset id="body">
								<?php if (isset($_SESSION["inicioSesionFallida"])){?>
								<fieldset>
								<label id="inicioSesionFallida">Inicio Sesion Incorrecto</label>
								<?php }?>
							    <fieldset>
								<label for="email">Email  <input type="text" name="correo" id="email" /></label>
							       
							    </fieldset>
							    <fieldset>
								<label for="password">Contraseña  <input type="password" name="contrasena" id="password" /></label>
							       
							    </fieldset>
							    <input type="submit" id="login" value="Entrar"  class="btn btn-info" onclick="formhash(this.form, this.form.password);"/>
							    <!--  <label for="checkbox"><input type="checkbox" id="checkbox" />Recuerdame</label> -->
							</fieldset>
							<!--<span><a href="#">Has olvidado la contraseña?</a></span> -->
						    </form>
						</div>
						</div>
					    </div>
					  </li>
					  <?php }else{?>
					    <li id="loginContainer">
						<div class="btn-group">
					  <button type="button"  data-toggle="dropdown"  class="btn btn-info dropdown-toggle">
					   <span class="glyphicon glyphicon-user">&nbsp;</span><?php echo $nick;?><span class="caret"></span>
					  </button>
					 
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="#">Ver mi perfil</a></li>
					    <li><a href="../controller/cerrar_sesion.php">Cerrar Sesion</a></li>
					  </ul>
					</div></li>
					  <?php }?>
					 <!-- Login Ends Here -->
				</ul>
		    	</nav>
			<!------------------------------------------------------------ FINAL NAV------------------------------------------------->
			<!------------------------------------------------------------ HEADER------------------------------------------------->
			<header>
			<div id="header">
				<div id="topc">
				<h3>Perfil de <?php echo $nick;?></h3>
				
				</div>
			</div>
			</header>	
			<!------------------------------------------------------------ FINAL HEADER------------------------------------------------->
			<!------------------------------------------------------------ CONTENT------------------------------------------------->
			<div id="content">
					<!------------------------------------------------------------ CONTENT SECTION 1------------------------------------------------->
					<section>

					<article id="slidevarNoticias">
						<div id="topc">
							<h3> Últimas Noticias</h3>
						</div>
						<div  id="fondosBlancos">
						<ol>
							<li><a href="#" >Noticia del dia</a></li>
							<li><a href="#" >Noticia del dia</a></li>
							<li><a href="#" >Noticia del dia</a></li>
							<li><a href="#" >Noticia del dia</a></li>
							<li><a href="#" >Noticia del dia</a></li>
							<li><a href="#" >Noticia del dia</a></li>

						</ol>
						</div>
					</article>

				</section>
						<!------------------------------------------------------------ FINAL SECTION 1------------------------------------------------->		
			</div>
			<!------------------------------------------------------------ FINAL CONTENT------------------------------------------------->
			<!------------------------------------------------------------ SLIDEBAR------------------------------------------------->
			<div id="sidebar">
				<!------------------------------------------------------------SECTION 1------------------------------------------------->
				<section>

							<div id="topc">
								<h3>Datos del Usuario</h3>
							</div>

							<article id="fondosBlancos">
								<div id="imangen"></div>
								<div id="derecha">
								<h2><?php echo $nick;?></h2>
								<div id="datos"></div>
								<button class="btn btn-default" id="cambio">cambir datos</button>
								<div id="cambioAqui"></div>
								</div>
							</article>

						</section>
				<!------------------------------------------------------------FINAL SECTION 1------------------------------------------------->
				
			</div>

			<!------------------------------------------------------------  FINAL SLIDEBAR------------------------------------------------->
			<!------------------------------------------------------------FOOTER------------------------------------------------->
			<footer>
				<p>&copy; Designet and Created by Judit Cerdà Izquierdo and Ibis Emmanuel</p>
			</footer>
			<!------------------------------------------------------------FINAL FOOTER------------------------------------------------->
		</div>
		<!------------------------------------------------------------  FINAL PAGEWRAP------------------------------------------------->

	</body>
</html>

