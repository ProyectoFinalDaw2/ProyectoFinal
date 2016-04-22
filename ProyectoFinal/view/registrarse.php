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
		<script src="../javaScrips/login.js"></script>

	</head>

	<body>
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
			<!------------------------------------------------------------NAV------------------------------------------------->
			<nav class="navbar navbar-inverse navbar-fixed-top">
		       			<ul>
					  <li><a href="../index.php" class="btn btn-info" >Inicio</a></li>
					   <li><a href="mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="noticias.php" class="btn btn-info">Noticias</a></li>
					  <li><a href="#" class="btn btn-primary">Registrate</a></li>
					<!-- Login Starts Here -->
						<li id="login">
					    <div id="loginContainer">
						<a href="#" id="loginButton" class="btn btn-warning"><span>Login</span><em></em></a>
						<div style="clear:both"></div>
						<div id="loginBox">
						    <form id="loginForm">
							<fieldset id="body">
							    <fieldset>
								<label for="email">Email  <input type="text" name="email" id="email" /></label>
							       
							    </fieldset>
							    <fieldset>
								<label for="password">Contraseña  <input type="password" name="password" id="password" /></label>
							       
							    </fieldset>
							    <input type="submit" id="login" value="Entrar"  class="btn btn-info" />
							    <label for="checkbox"><input type="checkbox" id="checkbox" />Recuerdame</label>
							</fieldset>
							<span><a href="#">Has olvidado la contraseña?</a></span>
						    </form>
						</div>
					    </div>
					  </li>
					 <!-- Login Ends Here -->
				</ul>
		    	</nav>
			<!------------------------------------------------------------ FINAL NAV------------------------------------------------->
			<!------------------------------------------------------------ HEADER------------------------------------------------->
			<header>
			<div id="header">
				<div id="topc">
				<h3>Registrate<h3>
				</div>
				<div id="fondosBlancos">
				 <h1>Aquí podras registrarte y formar parte de nuestro mundo</h1>     
				<h3>Este es el primer paso</h3>      
				</div>
				<article id="fondosBlancos">
				<div id="formulario">
				<form role="form">
				<div class="form-group">
				    <label >Nombre de Usuario</label>
				    <input type="text" class="form-control" id="usuario"
					   placeholder="Introduce nombre de usuario">
				  </div>
				  <div class="form-group">
				    <label>Email</label>
				    <input type="email" class="form-control" id="email"
					   placeholder="Introduce tu email">
				  </div>
				  <div class="form-group">
				    <label >Contraseña</label>
				    <input type="password" class="form-control" id="contrasena" 
					   placeholder="Contraseña">
				  </div>
				  <div class="form-group">
				    <label>Subir foto de perfil</label>
				    <input type="file" id="ejemplo_archivo_1">
				    <p class="help-block">Ejemplo de texto de ayuda.</p>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Activa esta casilla para aceptar los <a href="#">terminos de uso</a>
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Enviar</button>
				</form>	
				 </div>	
			</article>
			</header>
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

