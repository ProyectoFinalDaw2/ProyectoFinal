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
   
<!DOCTYPE HTML>
<html>
	<head>
		<title>Signer Register Form Flat Responsive Widget Template | Home :: w3layouts</title>
		<!-- Custom Theme files -->
		<link href="css/style-form.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- Custom Theme files -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<meta name="keywords" content="Signer Register Form Responsive,Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<!--Google Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!--Google Fonts-->
		<script type="text/JavaScript" src="js/sha512.js"></script> 
		<script type="text/JavaScript" src="js/forms.js"></script> 
	</head>
	<body>
		<!--sign up form start here-->
		<h1>Iniciar sesi&oacute;n</h1>
		<div class="singup">
			<h3>Iniciar sesi&oacute;n</h3>
			<div class="signup-main">
				<?php
					if (isset($_GET['error'])) {
						echo '<p class="error">Error al iniciar sesi&oacute;n!</p>';
					}
				?> 

				<form action="includes/process_login.php" method="post" name="login_form">
					<input type="text" value="Correo electr&oacute;nico" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" />
					<input type="password" value="Contrase&ntilde;a" class="lessgap" name="password" id="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" />
					<div class="send-button">
						<input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> 
					</div>
					<p> Si no tiene una cuenta, por favor <a href="register.php">reg&iacute;strese</a>.</p>
				  </form>
			</div>
		</div>	
		<div class="copyright">
		</div>
	</body>
</html>