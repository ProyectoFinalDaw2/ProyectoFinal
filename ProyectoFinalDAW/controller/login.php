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
	
	
	$id=$log->obtenerID($nick, $con);
	$actiu=$log->esActiu($id, $con);
	
	if ($nick!=false && $actiu==1){
		$_SESSION["inicioSesion"]=$nick;
		header('Location: ../index.php');
		echo "si";
	}else{
		$_SESSION["inicioSesionFallida"]="inicioSesionFallida";
		header('Location: ../index.php');
		echo "no";
	}

	$conn->disconnect($con);
}else{
	echo "Error connectarte a la base de datos";
}
?>