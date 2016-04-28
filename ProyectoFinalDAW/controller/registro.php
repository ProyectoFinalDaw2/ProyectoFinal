<?php
session_start();
include '../db/usuario.php';
include '../db/db_connect.php';

$nick = $_POST['nick'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$contrasena = $_POST['contrasena'];
$fecha = $_POST['fecha'];
$sexo = $_POST['sexo'];
$numero= $_POST['numero'];

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	$usuari=new Usuario($nick, $correo, $nombre, $apellidos, $contrasena, $fecha, $sexo, $numero);
	$insertado=$usuari->insertarUsuario($con);
	
	if ($insertado==true){
		echo "insertado con exito";
		$descon=$conn->disconnect($con);
		$_SESSION["inicioSesion"]=$nick;
		header('Location: ../index.php');
		
	}else{
		echo "Error al insertar usuario en la BDD";
	}
	
}else{
	echo "Error connectarte a la base de datos";
}


?>
