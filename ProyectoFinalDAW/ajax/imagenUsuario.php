<?php
session_start();
include '../db/db_connect.php';
include '../db/Selects.php';


$nick=$_SESSION["inicioSesion"];


$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	$log= new Buscador();
	$resultat=$log->veureImatge($nick, $con);
	
	if ($resultat!=false){
		
		
		while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
		
		
		
			// només si volem mostrar tots els camps de la consulta
		
			foreach ($registre as $col_value) {
				
				
				if  ($col_value==""){
					echo "../style/imagenes/usuarios/usuario.png";
				}else{
					echo $col_value;
				}
		
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
