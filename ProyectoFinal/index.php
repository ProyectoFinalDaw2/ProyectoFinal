<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	 
	sec_session_start();
	 
	if (login_check($mysqli) == true) {
	    $logged = 'in';
	} else {
	    $logged = 'out';
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
		<link rel="shortcut icon" type="image/x-icon" href="style/imagenes/favicon.ico" />
		<!-------------------------------------------------- css3-mediaqueries.js for IE8 or older----------------------------->
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<!------------------------------------------------------------ CSS------------------------------------------------>
		<link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
		<!------------------------------------------------------------ Bootstra------------------------------------------------>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
		<!------------------------------------------------------------ JQUERY------------------------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<!------------------------------------------------------------ Java scrips ------------------------------------------------->
		<script src="javaScrips/calendario.js" language="javascript" type="text/javascript"></script>
		<script src="javaScrips/login.js"></script>
		<!--Google Fonts-->
		<script type="text/JavaScript" src="javaScrips/sha512.js"></script> 
		<script type="text/JavaScript" src="javaScrips/forms.js"></script> 
		<!------------------------------------------------------------Coreusel------------------------------------------------->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>

	<body>
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
			<!------------------------------------------------------------NAV------------------------------------------------->
			<nav class="navbar navbar-inverse navbar-fixed-top">
		       			<ul>
					  <li><a href="#" class="btn btn-primary">Inicio</a></li>
					  <li><a href="view/mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="view/noticias.php" class="btn btn-info">Noticias</a></li>
					  <li><a href="view/registrarse.php" class="btn btn-info">Registrate</a></li>
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
								<label for="password">Contraseña  <input type="password" name="password" id="password" /></label>
							       
							    </fieldset>
							    <input type="submit" id="login" value="Entrar"  class="btn btn-info" onclick="formhash(this.form, this.form.password);"/>
							    <label for="checkbox"><input type="checkbox" id="checkbox" />Recuerdame</label>
							</fieldset>
							<span><a href="#">Has olvidado la contraseña?</a></span>
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
			<header>
			<div id="header">
				<div id="topc">
				<h3>Últimos Mangas<h3>
				</div>
				<div id="fondosBlancos">
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
								<h3>Noticias<h3>
							</div>

							<article id="fondosBlancos">
								<img  class="img-rounded" id="imagenNoticia" src="style/imagenes/noticias.png"/>
								<div id="derecha">
								<h2>London</h2>
								<h4>Explicacion sobre londes</h4>	
								<p>London is the capital city of England. It is the most populous city in the United Kingdom,
									with a metropolitan area of over 13 million inhabitants...</p>
						
								<button class="btn btn-default">Leer más</button>
								</div>
							</article>

							<article id="fondosBlancos">
								<img  class="img-rounded" id="imagenNoticia" src="style/imagenes/noticias.png"/>
								<div id="derecha">
								<h2>London</h2>
								<h4>Explicacion sobre londes</h4>	
								<p>London is the capital city of England. It is the most populous city in the United Kingdom,
									with a metropolitan area of over 13 million inhabitants...</p>
						
								<button class="btn btn-default">Leer más</button>
								</div>
							</article>

						</section>
						<!------------------------------------------------------------ FINAL SECTION 1------------------------------------------------->
						<!------------------------------------------------------------ CONTENT SECTION 2------------------------------------------------->
						<section>

							<div id="topc">
								<h3>Eventos destacados<h3>
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
									   
						
							</article>


						</section>
						<!------------------------------------------------------------ FINAL CONTENT 2------------------------------------------------->
						<!------------------------------------------------------------ CONTENT SECTION 3------------------------------------------------->
						<section>
							<div id="borrar">
									<div id="topc">
											<h3>Calendario pròximos estrenos<h3>
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
							<h3> Últimas Noticias<h3>
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
				<!------------------------------------------------------------FINAL SECTION 1------------------------------------------------->
				<!------------------------------------------------------------ SECTION 2------------------------------------------------->			
						<section>

							<article id="slidevarMangas">
								<div id="topc">
									<h3>Top mangas<h3>
								</div>
								<div id="fondosBlancos">
								<p> <button  class="btn btn-default active" >Semanal</button>  <button class="btn btn-default">Global</button></p>
								<ol>
									<li><img id="imgmangamini"src="style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
									<li><img id="imgmangamini"src="style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
									<li><img id="imgmangamini"src="style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
									<li><img id="imgmangamini"src="style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
									<li><img id="imgmangamini"src="style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
								</ol>
								</div>
							</article>

						</section>
						<!------------------------------------------------------------FINAL SECTION 2------------------------------------------------->
						<!------------------------------------------------------------ SECTION 3------------------------------------------------->
						<section>
							<div id="borrar">
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
				  							Escrive aquí tu mensaje
				 							 <input type="text" class="form-control" >
										</div>
										<button type="submit" class="btn btn-success">Enviar</button>
									</form>
								</div>
						
							</article>
							</div>
						</section>
						<!------------------------------------------------------------FINAL SECTION 3------------------------------------------------->

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

