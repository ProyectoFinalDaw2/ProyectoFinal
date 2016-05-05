<?php
include '../db/Selects.php';
include '../db/db_connect.php';
include '../db/administrador.php';
include '../db/usuarionormal.php';

$accion = $_POST['operacion'];
$nick = $_POST['nickUsuario'];

if ($nick != null){
	
	$conn=new Connect();
	$con=$conn->connection();
	
	if ($con!=false){
		
		$select=new Buscador();
		$id=$select->obtenerID($nick, $con);
		
		if ($id!=false){
			
			if ($accion=="administrador"){
			
				$cambiar= new Administrador();
				$admin=$cambiar->convertirAdmin($con, $id);
			
				if ($admin==true){
					header('Location: ../view/Control_Administrador.php');
				}else{
					echo "Error al hacer administrador";
				}
			
					
			}else{
				
				if ($accion=="borrar"){
					
					$normal=new UsuarioNormal();
					$desactivar=$normal->desactivar($id, $con);
					
					if ($desactivar==true){
						header('Location: ../view/Control_Administrador.php');
					}else{
						echo "Error al desactivar";
					}
					
				}
					
			}
			
			
			
		}else{
			echo "Error al obtener ID";
		}

	}else{
		echo "Error connectarte a la base de datos";
	}
	
	
}

?>