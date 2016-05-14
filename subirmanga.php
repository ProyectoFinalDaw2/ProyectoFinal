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

if (isset($_SESSION["moderador"])){
	$mod=$_SESSION["moderador"];

}else{
	$mod=null;

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
		<!------------------------------------------------------------Coreusel------------------------------------------------->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
				<!------------------------------------------------------------NAV------------------------------------------------->
		<nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
		
			
			<!-- El logotipo y el icono que despliega el menú se agrupan
				para mostrarlos mejor en los dispositivos móviles -->
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
			<span class="sr-only">Desplegar navegación</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand navbar-right" href="#"> <img src="../style/imagenes/simbolo.png" id="medida1" >Manga's Umbrella	</a>
		</div>
			
 
			<!-- Agrupar los enlaces de navegación, los formularios y cualquier
			otro elemento que se pueda ocultar al minimizar la barra -->
			<div class="collapse navbar-collapse navbar-ex1-collapse"> 
			<ul>
					
					  <li><a href="../index.php" class="btn btn-info">Inicio</a></li>
					  <li><a href="mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="noticias.php" class="btn btn-info">Noticias</a></li>
					   
					   <?php if ($admin!=null || $mod != null){?>
					    <li><a href="Control_Administrador.php" class="btn btn-info">Controll</a></li>
					   <?php }?>
					   <?php if ($nick!=null){ ?>
					   <li><a href="donaciones.php" data-paypal-button="true">
						<img src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_donate_92x26.png" alt="Donate with Paypal" />
						</a></li>
					   <?php } if ($nick==null){?>
					  <li><a href="registrarse.php" class="btn btn-info">Registrate</a></li>
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
					    <li><a href="perfil_usuario.php">Ver mi perfil</a></li>
					    <li><a href="../controller/cerrar_sesion.php">Cerrar Sesion</a></li>
					  </ul>
					</div></li>
					  <?php }?>
					 <!-- Login Ends Here -->
				</ul>
		 
		
		  </div>
		</nav>
			<!------------------------------------------------------------ FINAL NAV------------------------------------------------->
			<!------------------------------------------------------------ HEADER------------------------------------------------->
			
			<div id="header">
				<div id="topc">
				<h3>Subir Mangas</h3>
				</div>
				<div id="fondosBlancos">
	
					<form action="../controller/recibeimg.php" method="post" enctype="multipart/form-data" name="inscripcion">
					
					<p><font color="red">
					Nombre: <input type="text" name="txtnom" autofocus required  />
					<br />
					Tipo de manga: <input type="text" name="tipo"  required />
					<br />
					Nombre manga: <input type="text" name="manga"  required />
					<br />
					Version: <input type="text" name="version"  />
					<br />
					</font>
					</p>
						<input type="file" name="archivo[]" multiple="multiple">
						<input type="submit" value="Enviar"  class="trig">
					</form>
				
				  </div>	
			<!------------------------------------------------------------ FINAL Fondos blancos------------------------------------------------->
		   					
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


