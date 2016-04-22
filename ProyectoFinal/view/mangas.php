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
					  <li><a href="#" class="btn btn-primary">Mangas</a></li>
					   <li><a href="noticias.php" class="btn btn-info">Noticias</a></li>
					  <li><a href="registrarse.php" class="btn btn-info">Registrate</a></li>
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
				<h3>Mangas<h3>
				</div>
				<div id="fondosBlancos">
					 <h1>Comparte mangas con otros usuarios.</h1>      
		 			<button type="button" class="btn btn-primary btn-lg">Subir Mangas</button></br></br>
					<small>Para poder subir mangas tienes que registrarte y aceptar las condiciones</small>
				</div>
			</div>
			</header>
			<!------------------------------------------------------------ FINAL HEADER------------------------------------------------->
			<!------------------------------------------------------------ CONTENT------------------------------------------------->
			<!------------------------------------------------------------ CONTENT (zona izquierda)------------------------------------------------->
		<div id="content">
			<!------------------------------------------------------------ CONTENT SECTION 1------------------------------------------------->
			<section>

					<div id="topc">
						<h3>Buscador:<h3>
					</div>

					<article id="fondosBlancos">
						<div id="buscador">
						<br/>
						<form>
						<input maxlength="20"  type="Search" placeholder="Buscar por nombre..." class="form-control" id="buscadorI"/>
						<input type="button" class="btn-default" value="Enviar"/>						
						</form>
						<br/>
						</div>
					</article>

					<article id="fondosBlancos">
						<div id="contenedor" class="table-responsive">
				    			<div id="contenidos">
								<div id="columna"></div>
								<div id="columna"><h3>Nombre</h3></div>
								<div id="columna"><h3>Tipo</h3></div>
								<div id="columna"><h3>Fecha</h3></div>
							 </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							<div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							<div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							<div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
							 <div id="contenidos">
								<div id="columna"><img src="../style/imagenes/conan.png" class="img-rounded"/></br></div>
								<div id="columna"><a href="#" >Conan</a></div>
								<div id="columna">Intriga</div>
								<div id="columna">04/05/2000</div>
							  </div>
						</div>
						<div id="numeros">
						<div class="btn-toolbar" role="toolbar">
						  <div class="btn-group">
						     <button type="button" class="btn">1</button>
						    <button type="button" class="btn btn-default">2</button>
						    <button type="button" class="btn btn-default">3</button>
						    <button type="button" class="btn btn-default">4</button>
						  </div>
						</div>
						</div>
					</article>

				</section>
				<!------------------------------------------------------------ FINAL SECTION 1------------------------------------------------->
				
		</div>
		<!------------------------------------------------------------ 	FINAL CONTENT------------------------------------------------->
		<!------------------------------------------------------------ SLIDEBAR (zona derecha)------------------------------------------------->
		<div id="sidebar">
				<section>

					<article id="slidevarNoticias">
						<div id="topc">
							<h3> Recomendados<h3>
						</div>
						<div  id="fondosBlancos">
						<ol >
							<li><a href="#" >Manga 1</a></li>
							<li><a href="#" >Manga 2</a></li>
							<li><a href="#" >Manga 3</a></li>
							<li><a href="#" >Manga 4</a></li>
							<li><a href="#" >Manga 5</a></li>
							<li><a href="#" >Manga 6</a></li>

						</ol>
						</div>
					</article>

				</section>
		
				<section>

					<article id="slidevarMangas">
						<div id="topc">
							<h3>Top mangas<h3>
						</div>
						<div id="fondosBlancos">
						<p> <button  class="btn btn-default active" >Semanal</button>  <button class="btn btn-default">Global</button></p>
						<ol>
							<li><img id="imgmangamini"src="../style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
							<li><img id="imgmangamini"src="../style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
							<li><img id="imgmangamini"src="../style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
							<li><img id="imgmangamini"src="../style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
							<li><img id="imgmangamini"src="../style/imagenes/inuyasha.png" class="img-rounded"/><a href="#" > Inuyasha</a> <br/> subido por joquese1996</li>
						</ol>
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

