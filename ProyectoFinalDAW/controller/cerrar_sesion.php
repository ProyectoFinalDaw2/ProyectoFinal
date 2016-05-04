<?php

$llamar=new Cerrrar_Sesion();
$llamar->cerrar_sesion();

Class Cerrrar_Sesion{
	
	public function cerrar_sesion(){
		session_start();
		unset( $_SESSION["inicioSesion"]);
		unset( $_SESSION["administrador"]);
		header('Location: ../index.php');
		
	}
	
}
	

?>
