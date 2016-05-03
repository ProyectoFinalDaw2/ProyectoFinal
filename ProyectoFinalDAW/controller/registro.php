<?php
session_start();
include '../db/usuario.php';
include '../db/administrador.php';
include '../db/usuarionormal.php';
include '../db/db_connect.php';
include '../db/Selects.php';

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
		
		$selec=new Buscador();
		$id=$selec->obtenerID($nick, $con);
		
		if ($id!=false){
			
			$admin=new Administrador();
			$meter=$admin->meterEnTabla($con, $id);
			
			if ($meter==true){
				
				$normal= new UsuarioNormal();
				$meter2=$normal->meterEnTablaNormal($con, $id);
				
				if ($meter2==true){
					$descon=$conn->disconnect($con);
					$_SESSION["inicioSesion"]=$nick;
					header('Location: ../index.php');
				}else{
					echo "Error al meter en tabla normal";
				}
				
				
			}else{
				echo "Error al meter en la tabla admin";
			}
			
		}else{
			echo "Error al Obtener ID";
		}
		
		
		
	}else{
		echo "Error al insertar usuario en la BDD";
	}
	
}else{
	echo "Error connectarte a la base de datos";
}


?>
