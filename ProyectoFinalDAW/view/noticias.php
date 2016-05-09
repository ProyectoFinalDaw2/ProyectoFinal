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
		<script src="../javaScripts/login.js"></script>
		<script src="../javaScripts/subirNoticia.js"></script>
		<script src="../javaScripts/mostrarRanking.js"></script>
		<script src="../javaScripts/mostrarNoticias.js"></script>
		
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
					   <li><a href="noticias.php" class="btn btn-primary">Noticias</a></li>
					   <?php if ($admin!=null){?>
					    <li><a href="../view/Control_Administrador.php" class="btn btn-info">Controll</a></li>
					   <?php }?>
					   <?php if ($nick==null){?>
					  <li><a href="../view/registrarse.php" class="btn btn-info">Registrate</a></li>
					   <!-- Login Starts Here -->
					   
						<li id="login">
					    <div id="loginContainer">
						<div id="loginButton">
						<a href="#" id="loginButton" class="btn btn-warning"><span>Login</span><em></em></a>
						<div style="clear:both"></div>
						<div id="loginBox">
						    <form id="loginForm" action="../controller/login.php" method="post" name="login_form">
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
					    <li><a href="../view/perfil_usuario.php">Ver mi perfil</a></li>
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
				<h3>Noticias<h3>
				</div>
				<div id="fondosBlancos">
					 <h1>Comparte las últimas noticias con los demas usuarios</h1>      
		 			<button type="button" class="btn btn-primary btn-lg" id="noticia">Subir Noticia</button></br>
		 			<?php if ($nick!=null){?><div id="contenido"></div><?php }?>
					<?php if ($nick==null){?><small>Para poder subir noticias tienes que registrarte y aceptar las condiciones</small><?php }?>
				</div>
			</div>
			</header>
			<!------------------------------------------------------------ FINAL HEADER------------------------------------------------->
			<!------------------------------------------------------------ CONTENT------------------------------------------------->
		<div id="content">
			<!------------------------------------------------------------ CONTENT SECTION 1------------------------------------------------->
			<section>

					<div id="topc">
						<h3>Noticia mas destacada:<h3>
					</div>

					
				
						<div id="destacada"></div>
					
					<div id="topc">
						<h3>Noticias<h3>
					</div>
					<div id="cargarTodasNoticias"></div>
					

				</section>
				<!------------------------------------------------------------ FINAL SECTION 1------------------------------------------------->
				
		</div>
		<!------------------------------------------------------------ 	FINAL CONTENT------------------------------------------------->
		<!------------------------------------------------------------ SLIDEBAR (zona derecha)------------------------------------------------->
		<div id="sidebar">
				<section>

					<article id="slidevarNoticias">
						<div id="topc">
							<h3> Últimas Noticias<h3>
						</div>
						<div  id="fondosBlancos">
							<div id="ultimasNoticias"></div>
						</div>
					</article>

				</section>
		
				<section>

					<article id="slidevarMangas">
						<div id="topc">
							<h3>Top Noticias<h3>
						</div>
						<div id="fondosBlancos">
						<p> <button  class="btn btn-default" id="semanal">Semanal</button>  <button class="btn btn-default" id="global">Global</button></p>
						<div id="ranking"></div>
						
						</div>
					</article>

				</section>
				<div id="borrar">
				<section>
					
					<article id="slidevarChat">
						<div id="topc">
							<h3>Chat<h3>
						</div>
						<div id="fondosBlancos">
						 <div id="chat1">
						 <div id="chat"><br/><br/><br/><br/><br/><br/><br/><br/>Inicie sesion para comentar en nuestro chat</div>
							</br>
							<form>
								<div class="form-group has-success">
		  							<label class="control-label" for="inputSuccess">Escrive aquí tu mensaje</label>
		 							 <input type="text" class="form-control" >
								</div>
								<button type="submit" class="btn btn-success">Enviar</button>
							</form>
						</div>
						
					</article>
				</section>
				</div>
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

