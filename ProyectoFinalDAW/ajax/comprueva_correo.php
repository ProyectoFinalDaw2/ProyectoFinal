<?php
include '../db/db_connect.php';
include '../db/Selects.php';

$correo=$_POST["correo"];

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	try{
		$sel_correo = new Buscador();
		$resultat=$sel_correo->veureUsuariCorreu($correo, $con);
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