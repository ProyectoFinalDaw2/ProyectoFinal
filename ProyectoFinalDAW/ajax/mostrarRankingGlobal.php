<?php
include '../db/db_connect.php';
include '../db/Selects_Noticia.php';
include '../db/Selects.php';

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	$selcUs=new Buscador();
	$select=new BuscadorNoticia();
	$resultat=$select->obtenerRankingGlobal($con);
	
	
	
	if ($resultat!=false){
		echo "<ol>";
		while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
			
			echo "<li>";
			if ($registre["imagen"]!=null){
				echo "<img id='imgmangamini' src='";
				print_r($registre["imagen"]);
				echo "' class='img-rounded'/>";
			}
			echo "<a href='../controller/pasandoIDNoticia.php?idnot=";
			print_r($registre["IDNOT"]);
			echo "'>";
			print_r ($registre["titulo"]);
			echo "'</a> </br> Subido por:";
			$resul=$selcUs->veureNick($registre["ID"], $con);
			if ($resul!=false){
				echo $resul;
			}
			echo "</li>";

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
