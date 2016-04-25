<?php
	include_once '../db/db_connect.php';
	include_once '../db/functions.php';
	 
	sec_session_start(); // Nuestra manera personalizada segura de iniciar sesión PHP.
	 
	if(isset($_POST['email'], $_POST['p'])) {
	    $email = $_POST['email'];
	    $password = $_POST['p']; // La contraseña con hash
	 
	    if(login($email, $password, $mysqli) == true) {
		
			if($_SESSION['admin'] == 1)	{

				$_SESSION['admin'] = 1;
			
				header('Location: ../admin.php');
				
			} else{
			
				// Inicio de sesión exitosa
	
				header('Location: ../view/protected_page.php');
			
			}
			
	    } else {
		// Inicio de sesión exitosa, usuario incorrecto
		header('Location: ../view/error.php?error=Contrasena y/o correo electronico incorrecto/s');
	    }
	} else {
	    // Las variables POST correctas no se enviaron a esta página.
	    echo 'Solicitud no válida';
	}

?>