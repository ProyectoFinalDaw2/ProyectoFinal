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
		<script src="../javaScripts/comprovar_registro.js"></script>
		<!------------------------------------------------------------Coreusel------------------------------------------------->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>

	<body onload="inici();">
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
			<!------------------------------------------------------------NAV------------------------------------------------->
			<nav class="navbar navbar-inverse navbar-fixed-top">
		       			<ul>
					   <div id="logo"><li><a href="#"><img src="../style/imagenes/simbolo.png" id="medida1"></a>Manga's Umbrella Corporation</li></div>
					  <li><a href="../index.php" class="btn btn-info">Inicio</a></li>
					  <li><a href="mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="noticias.php" class="btn btn-info">Noticias</a></li>
					   <?php if ($admin!=null){?>
					    <li><a href="../view/Control_Administrador.php" class="btn btn-info">Controll</a></li>
					   <?php }?>
					   <?php if ($nick==null){?>
					  <li><a href="view/registrarse.php" class="btn btn-info">Registrate</a></li>
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
			
			<div id="header">
				<div id="topc">
				<h3>Registrate</h3>
				</div>
				<div id="fondosBlancos">
				 <h1>Aquí podrás registrarte y formar parte de nuestro mundo</h1>     
				<h3>Este es el primer paso</h3>      
				</div>
				<article id="fondosBlancos">
				<div id="formulario">
				<div id="registro">
				<form id="formulari" action="../controller/registro.php" method="post" onsubmit="return validateMyForm();">
					 <label id="label" >Introduce un Nick *</label>
				    <input type="text" class="form-control" id="nick" placeholder="Introduce un Nick" name="nick">
					<p class="help-block" id="negro">El nick deve ser unico</p>
 					
				    <label>Email *</label>
				    <input type="email" class="form-control" id="correo" placeholder="Introduce tu email" name="correo">
					<p class="help-block" id="negro">El email deve ser unico</p>

					
				    <label >Nombre *</label>
				    <input type="text" class="form-control" id="nombre" placeholder="Introduce nombre de usuario" name="nombre">
				
				  
				    <label >Apellidos *</label>
				    <input type="text" class="form-control" id="apellidos" placeholder="Introduce tus apellidos" name="apellidos">
						  
				  
				    <label >Contraseña *</label>
				    <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena">
				  
				  
				    <label >Repite Contraseña *</label>
				    <input type="password" class="form-control" id="contrasena2" placeholder="Contraseña" name="contrasena2">
				    
				     <label >Fecha de nacimiento *</label>
				    <input type="date" class="form-control" id="fecha" name="fecha">
				
					<label> Sexo </label>
				    <select id="sexo" class="form-control" name="sexo">
				      <option value="noseespecifica">No se especifica</option>
					  <option value="hombre">Hombre</option>
					  <option value="mujer">Mujer</option>
					</select>
					
					<label >Telefono</label>
				    <input type="text" class="form-control" id="numero" placeholder="Introduce tu numero de telefono" name="numero">
				    
				   <label >Captcha</label>  
				   <br/>
				   <div id="imatges"><button class="btn btn-success" id="retweet"><span class="glyphicon glyphicon-retweet"></span></button></div>
				    <input type="text" name="captcha" class="form-control" id="captcha" /> </p>
				    
				 	<br/>
				    <label>
				      <input type="checkbox" id="aceptar">* Activa esta casilla para aceptar los <a href="terminos_de_uso.php">términos de uso</a>
				    </label>
				   
					  <label>
				     <input type="submit" id="submit" class="btn btn-default" value="Enviar" />
				      </label>	
				 	   
				</form>	
				</div>
				 </div>	
			</article>
			
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

