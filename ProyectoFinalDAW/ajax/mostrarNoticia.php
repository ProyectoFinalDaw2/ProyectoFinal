<?php 
include '../db/db_connect.php';
include '../db/Selects_Noticia.php';
include '../db/Selects.php';

session_start();

$idnot=$_SESSION["IDNOT"];

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	
	$selec = new BuscadorNoticia();
	
	$resultat=$selec->obtenerNoticiaEspecifica($con, $idnot);
	
	$selcUs=new Buscador();
	
	if ($resultat!=false){
		
		while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
			
			if ($registre["imagen"]!=null){
				echo "<img  class='img-rounded' id='imagenNoticiaGRANDE' src='";
				print_r($registre["imagen"]);
				echo "'/>";
			}
			
			
				echo "<h2>";
				print_r($registre["titulo"]);
				echo "</h2>";
				
				echo "<h4>";
				print_r($registre["descripcion"]);
				echo "</h4>";
				
				echo "<p>";
				print_r($registre["noticia"]);
				echo "</p>";
				
				if ($registre["video"]!=null){
						echo "<video src='";
						print_r($registre["video"]);
						echo "' width='400' height='400' controls  preload loop ></video>";
				}
				
				echo "</br> <small> Subido por: ";
			
				$resul=$selcUs->veureNick($registre["ID"], $con);
				if ($resul!=false){
					echo $resul;
				}
				echo " fecha:";
				print_r($registre["fecha"]);			
				echo "</small>";
				

			
	
		}
		
	
	}else{
		echo "Error en la consulta";
	}
	
	$conn->disconnect($con);



}else{
	echo "Error connectarte a la base de datos";
}



?>