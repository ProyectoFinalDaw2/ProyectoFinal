<?php
include '../db/db_connect.php';
include '../db/Selects_Noticia.php';

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	
		$select=new BuscadorNoticia();
		$resultat=$select->obtenerUltimasNoticias($con);
		
		if ($resultat!=false){
			echo "<ol>";
			while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
						//print_r ($registre["IDNOT"]);
				
					echo "<li><a href='../controller/pasandoIDNoticia.php?idnot=";
					print_r($registre["IDNOT"]);
					echo "'>";	
					print_r ($registre["titulo"]);
					echo "'</a></li>";
						
			}
			echo "</ol>";
								
		}else{
			echo "Error en la consulta";
		}
		
		

		$conn->disconnect($con);



}else{
	echo "Error connectarte a la base de datos";
}




?>

