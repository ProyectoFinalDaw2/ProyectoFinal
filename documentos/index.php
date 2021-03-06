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

if (isset($_SESSION["inicioSesion"])){
	$nick=$_SESSION["inicioSesion"];
	if (isset($_SESSION["recargar"])){
		
	}else{
		$_SESSION["recargar"]="si";
		header("Location: ajax/controll.php");
	}
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
		<link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
		<!------------------------------------------------------------ Bootstrap------------------------------------------------>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
		<!------------------------------------------------------------ JQUERY------------------------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<!------------------------------------------------------------ Java scripts ------------------------------------------------->
		<script src="javaScripts/calendario.js" type="text/javascript"></script>	
 		<script src="javaScripts/login.js"></script> 
 	    <script src="javaScripts/controll.js"></script>
 	    <script src="javaScripts/mostrarRankingMangasIndex.js"></script>
 	  
		<!------------------------------------------------------------Coreusel------------------------------------------------->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>
	<!-------------------------------------------------- FINAL HEAD----------------------------->
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
			
			<a class="navbar-brand navbar-right" href="#"> <img src="style/imagenes/simbolo.png" id="medida1" >Manga's Umbrella	</a>
		</div>
			
 
			<!-- Agrupar los enlaces de navegación, los formularios y cualquier
			otro elemento que se pueda ocultar al minimizar la barra -->
			<div class="collapse navbar-collapse navbar-ex1-collapse"> 
			<ul>
					
					  <li><a href="#" class="btn btn-primary">Inicio</a></li>
					  <li><a href="view/mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="view/noticias.php" class="btn btn-info">Noticias</a></li>
					   
					   <?php if ($admin!=null || $mod != null){?>
					    <li><a href="view/Control_Administrador.php" class="btn btn-info">Controll</a></li>
					   <?php }?>
					   <?php if ($nick!=null){ ?>
					   <li><a href="view/donaciones.php" data-paypal-button="true">
						<img src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_donate_92x26.png" alt="Donate with Paypal" />
						</a></li>
					   <?php } if ($nick==null){?>
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
							    <input type="submit" id="login" value="Entrar"  name="logsub" class="btn btn-info" onclick="formhash(this.form, this.form.password);"/>
							    
							    
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
					    <li><a href="view/perfil_usuario.php">Ver mi perfil</a></li>
					    <li><a href="controller/cerrar_sesion.php">Cerrar Sesion</a></li>
					  </ul>
					</div></li>
					  <?php }?>
					 <!-- Login Ends Here -->
				</ul>
		 
		
		  </div>
		</nav>
			<!------------------------------------------------------------ FINAL NAV------------------------------------------------->
			<!------------------------------------------------------------ HEADER------------------------------------------------->
			<header>
			<div id="header">
				<div id="topc">
				<h3>Últimos Mangas </h3>
				</div>
				<div id="fondosBlancos" class="table-container">
				<div id="contenedor" class="table-responsive">
		    			<div id="contenidos">
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded" /></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a> </div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a> </div>
					 </div>
					 <div id="contenidos">
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a></div>
						<div id="columna"><img src="style/imagenes/onepiece.png" class="img-rounded"/></br><a href="#" >1-One Piece</a> </div>
					  </div>
				</div>
				</div>
			</div>
			</header>
			<!------------------------------------------------------------ FINAL HEADER------------------------------------------------->
			<!------------------------------------------------------------ CONTENT------------------------------------------------->
			<div id="content">
					<!------------------------------------------------------------ CONTENT SECTION 1------------------------------------------------->
					<section>

							<div id="topc">
								<h3>Noticias</h3>
							</div>

							<div id="destacada"></div>
							
						

						</section>
						<!------------------------------------------------------------ FINAL SECTION 1------------------------------------------------->
						<!------------------------------------------------------------ CONTENT SECTION 2------------------------------------------------->
						<section>

							<div id="topc">
								<h3>Eventos destacados</h3>
							</div>

							<article id="fondosBlancos">
										       
								    <div id="carousel-example-generic" class="carousel slide">
									<!-- Indicators -->
									<ol class="carousel-indicators hidden-xs">
									    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
									    <div class="item active">
										<img class="img-responsive img-full" src="style/imagenes/salonManga.png" alt="" id="imgCarousel">
									    </div>
									    <div class="item">

										<img class="img-responsive img-full" src="style/imagenes/salonComic.png" alt="" id="imgCarousel">
									    </div>              
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									    <span class="icon-prev"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									    <span class="icon-next"></span>
									</a>
							   

								</br>
									
								</div>   
						
							</article>


						</section>
						<!------------------------------------------------------------ FINAL CONTENT 2------------------------------------------------->
						<!------------------------------------------------------------ CONTENT SECTION 3------------------------------------------------->
						<section>
							<div id="borrar">
									<div id="topc">
											<h3>Calendario pròximos estrenos</h3>
										</div>
							<article id="calendario">

								<div id="calendar"></div>
			
							</article>
							</div>
		
					</section>
					<!------------------------------------------------------------ FINAL SECTION 3------------------------------------------------->
			</div>
			<!------------------------------------------------------------ FINAL CONTENT------------------------------------------------->
			<!------------------------------------------------------------ SLIDEBAR------------------------------------------------->
			<div id="sidebar">
				<!------------------------------------------------------------SECTION 1------------------------------------------------->
				<section>

					<article id="slidevarNoticias">
						<div id="topc">
							<h3> Últimas Noticias</h3>
						</div>
						<div  id="fondosBlancos">
						<div id="ultimasNoticias"></div>
						</div>
					</article>

				</section>
				<!------------------------------------------------------------FINAL SECTION 1------------------------------------------------->
				<!------------------------------------------------------------ SECTION 2------------------------------------------------->			
						<section>

							<article id="slidevarMangas">
								<div id="topc">
									<h3>Top mangas</h3>
								</div>
								<div id="fondosBlancos">
						<p> <button  class="btn btn-default" id="semanal">Semanal</button>  <button class="btn btn-default" id="global">Global</button></p>
						<div id="ranking"></div>
						</div>
							</article>

						</section>
						<!------------------------------------------------------------FINAL SECTION 2------------------------------------------------->
						<!------------------------------------------------------------ SECTION 3------------------------------------------------->
						<section>
							<div id="borrar">
							<article id="slidevarChat">
								<div id="topc">
									<h3>Chat</h3>
								</div>
								<div id="fondosBlancos">
								 <div id="chat1">
								 <div id="chat"><br/><br/><br/><br/><br/><br/><br/><br/>Inicie sesion para comentar en nuestro chat</div>
									</br>
									<form>
										<div class="form-group has-success">
				  							Escrive aquí tu mensaje
				 							 <input type="text" class="form-control" >
										</div>
										<button type="submit" class="btn btn-success">Enviar</button>
									</form>
								</div>
							</div>
							</article>
							</div>
						</section>
						<!------------------------------------------------------------FINAL SECTION 3------------------------------------------------->

			</div>

			<!------------------------------------------------------------  FINAL SLIDEBAR------------------------------------------------->
			<!------------------------------------------------------------FOOTER------------------------------------------------->
			<footer>
			<div id="cookies" >
	<p>
			<b>Mangas's Umbrella</b> utiliza cookies propias y de terceros para mejorar su experiencia de navegacion y tambien para hacer algunas cosas especificas. Si continua navegando, entendemos que acepta nuestra <a  href="view/politica_de_cookies.php" >Politica de Cookies</a>.
	</p>
</div>
				<p>&copy; Designet and Created by Judit Cerdà Izquierdo and Ibis Emmanuel</p>
			</footer>
			<!------------------------------------------------------------FINAL FOOTER------------------------------------------------->
		</div>
		<!------------------------------------------------------------  FINAL PAGEWRAP------------------------------------------------->

	</body>
</html>
