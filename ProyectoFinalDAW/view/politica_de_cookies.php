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
		<script src="../javaScripts/login.js"></script>

	</head>

	<body>
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
			<!------------------------------------------------------------NAV------------------------------------------------->
			<nav class="navbar navbar-inverse navbar-fixed-top">
		       			<ul>
		       		<div id="logo"><li><a href="#"><img src="../style/imagenes/simbolo.png" id="medida1"></a>Manga's Umbrella Corporation</li></div>
		       		<li><a href="#" class="btn btn-info">Inicio</a></li>
		       		<li><a href="mangas.php" class="btn btn-info">Mangas</a></li>
		       		<li><a href="noticias.php" class="btn btn-info">Noticias</a></li>
		       		<li><a href="registrarse.php" class="btn btn-info">Registrate</a></li>
		       		<!-- Login Starts Here -->

		       		<li id="login">
		       				<div id="loginContainer">
		       				<div id="loginButton">
		       				<a href="#" id="loginButton" class="btn btn-warning"><span>Login</span><em></em></a>
		       				<div style="clear:both"></div>
		       				<div id="loginBox">
		       				<?php
		       				if (isset($_GET['error'])) {
		       					echo '<p class="error">Error al iniciar sesi&oacute;n!</p>';
		       				}
		       				?> 	<?php
								if (isset($_GET['error'])) {
									echo '<p class="error">Error al iniciar sesi&oacute;n!</p>';
									}
								?> 
						    <form id="loginForm" action="includes/process_login.php" method="post" name="login_form">
							<fieldset id="body">
							    <fieldset>
								<label for="email">Email  <input type="text" name="email" id="email" /></label>
							       
							    </fieldset>
							    <fieldset>
								<label for="password">ContraseÃ±a  <input type="password" name="password" id="password" /></label>
							       
							    </fieldset>
							    <input type="submit" id="login" value="Entrar"  class="btn btn-info" onclick="formhash(this.form, this.form.password);"/>
							    <label for="checkbox"><input type="checkbox" id="checkbox" />Recuerdame</label>
							</fieldset>
							<span><a href="#">Has olvidado la contraseÃ±a?</a></span>
						    </form>
						</div>
						</div>
					    </div>
					  </li>
					 <!-- Login Ends Here -->
				</ul>
		    	</nav>
			<!------------------------------------------------------------ FINAL NAV------------------------------------------------->
			<!------------------------------------------------------------ HEADER------------------------------------------------->
			
			<div id="header">
				<div id="topc">
				<h3>Terminos de Uso</h3>
				</div>
				<div id="fondosBlancos">
				 <h1>Al aceptar los siguientes puntos, usted se compromete a ...</h1>     
			     
		   		 </div>	
		
			
			<!------------------------------------------------------------ FINAL HEADER------------------------------------------------->
			
			<!------------------------------------------------------------FOOTER------------------------------------------------->
			<footer>
				<p>&copy; Designet and Created by Judit CerdÃ  Izquierdo and Ibis Emmanuel</p>
			</footer>
			<!------------------------------------------------------------FINAL FOOTER------------------------------------------------->
		</div>
		<!------------------------------------------------------------  FINAL PAGEWRAP------------------------------------------------->

	</body>
</html>


