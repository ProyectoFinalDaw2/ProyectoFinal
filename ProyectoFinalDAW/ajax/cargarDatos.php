<?php
session_start();
include '../db/db_connect.php';
include '../db/Selects.php';


$nick=$_SESSION["inicioSesion"];
$llista = array();
array_push($llista, "Correo");
array_push($llista, "Nombre");
array_push($llista, "Apellidos");
array_push($llista, "Fecha de Nacimiento");
array_push($llista, "Sexo");
array_push($llista, "Telefono");

$contador=0;


$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	$log= new Buscador();
	$resultat=$log->veureTot($nick,$con);
	
	if ($resultat!=false){
		
		
		while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
		
		
		
			// només si volem mostrar tots els camps de la consulta
		
			foreach ($registre as $col_value) {
				
				echo "<h4>$llista[$contador]</h4>";
				echo "$col_value</br>";
				$contador=$contador+1;
		
			}
		
			
		
		}
		
		$conn->disconnect($con);
		
		
	}else{
		echo "ERROR de la consulta";
	}

}else{
	echo "Error connectarte a la base de datos";
}

?>