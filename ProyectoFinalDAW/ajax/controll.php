<?php
session_start();
include '../db/Selects.php';
include '../db/db_connect.php';

if (isset($_SESSION["inicioSesion"])){
	$nick=$_SESSION["inicioSesion"];
	
	$conn=new Connect();
	$con=$conn->connection();
	
	
	if ($con!=false){
		$sel=new Buscador();
		
		$id=$sel->obtenerID($nick, $con);
		if ($id!=false){
			$admin=$sel->esAdministrador($id, $con);
			
			if($admin==true){
				$_SESSION["administrador"]="si";
				echo $_SESSION["administrador"];
			}else{
				echo "no";
			}
			
		}else{
			echo "Error al obtener ID";
		}
		
		
		
	}else{
		echo "Error connectarte a la base de datos";
	}

	

}else{
	echo "no";

}


?>