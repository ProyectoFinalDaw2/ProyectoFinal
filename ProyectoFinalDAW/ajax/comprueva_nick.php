<?php
include '../db/db_connect.php';
include '../db/Selects.php';

$nick=$_POST["autor"];

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	try{
		$sel_nick = new Buscador();
		$resultat=$sel_nick->veureUsuari($nick, $con);
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