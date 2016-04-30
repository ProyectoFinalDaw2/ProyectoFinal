<?php
include '../db/db_connect.php';
include '../db/Selects.php';

$contrasenya=$_POST["contrasenya"];

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	try{
		$sel_contrasenya = new Buscador();
		$resultat=$sel_contrasenya->veureUsuariContrasenya($contrasenya, $con);
		if ($resultat==true){
			echo "si";
		}else{
			echo "no";
		}

	}catch (ExceptionSQL $e){
		echo "Fallo al realizar la consulta";
	}

}else{
	echo "Fallo al conectarse a la base de datos";

}


?>