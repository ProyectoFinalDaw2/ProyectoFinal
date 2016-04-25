<?php
	include_once '../db/db_connect.php';
	include_once '../db/functions.php';
	 
	sec_session_start(); // Nuestra manera personalizada segura de iniciar sesi�n PHP.
	 
	if(isset($_POST['email'], $_POST['p'])) {
	    $email = $_POST['email'];
	    $password = $_POST['p']; // La contrase�a con hash
	 
	    if(login($email, $password, $mysqli) == true) {
		
			if($_SESSION['admin'] == 1)	{

				$_SESSION['admin'] = 1;
			
				header('Location: ../admin.php');
				
			} else{
			
				// Inicio de sesi�n exitosa
	
				header('Location: ../view/protected_page.php');
			
			}
			
	    } else {
		// Inicio de sesi�n exitosa, usuario incorrecto
		header('Location: ../view/error.php?error=Contrasena y/o correo electronico incorrecto/s');
	    }
	} else {
	    // Las variables POST correctas no se enviaron a esta p�gina.
	    echo 'Solicitud no v�lida';
	}

?>