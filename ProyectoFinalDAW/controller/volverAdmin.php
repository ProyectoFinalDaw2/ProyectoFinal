<?php
include '../db/Selects.php';
include '../db/db_connect.php';
include '../db/administrador.php';

$accion = $_POST['operacion'];
$nick = $_POST['nickUsuario'];

if ($nick != null){
	
	$conn=new Connect();
	$con=$conn->connection();
	
	if ($con!=false){
		
		if ($accion=="administrador"){
			$select=new Buscador();
			$id=$select->obtenerID($nick, $con);

			if ($id!=false){
				$cambiar= new Administrador();
				$admin=$cambiar->convertirAdmin($con, $id);
				
				if ($admin==true){
					header('Location: ../index.php');
				}else{
					echo "Error al hacer administrador";
				}
				
			}else{
				echo "Error al obtener ID";
			}
		}
		
		
	}else{
		echo "Error connectarte a la base de datos";
	}
	
	
}

?>