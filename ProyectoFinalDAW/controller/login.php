<?php
session_start();
include '../db/db_connect.php';
include '../db/Selects.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	$log= new Buscador();
	$nick=$log->IniciarSesion($correo, $contrasena, $con);
	
	if ($nick!=false){
		$_SESSION["inicioSesion"]=$nick;
		header('Location: ../index.php');
	}else{
		$_SESSION["inicioSesionFallida"]="inicioSesionFallida";
		header('Location: ../index.php');
	}

	$conn->disconnect($con);
}else{
	echo "Error connectarte a la base de datos";
}
?>