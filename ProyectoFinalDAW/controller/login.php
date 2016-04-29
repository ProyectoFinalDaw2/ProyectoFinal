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
		$pag=$_SERVER['HTTP_REFERER'];
		$location="Location: ".$pag;
		header($location);
	}else{
		$_SESSION["inicioSesionFallida"]="inicioSesionFallida";
		$pag=$_SERVER['HTTP_REFERER'];
		$location="Location: ".$pag;
		header($location);
	}

	$conn->disconnect($con);
}else{
	echo "Error connectarte a la base de datos";
}
?>