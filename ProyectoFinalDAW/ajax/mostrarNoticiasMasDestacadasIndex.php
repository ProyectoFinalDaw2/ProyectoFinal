<?php

include '../db/db_connect.php';
include '../db/Selects_Noticia.php';


$conn=new Connect();
$con=$conn->connection();
$url=null;

if ($con!=false){

	$select_noticia=new BuscadorNoticia();
	
	
		$resultat=$select_noticia->obtenerDestacadaGlobal2($con);

		if ($resultat!=false){
			while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
				
				echo " <article id='fondosBlancos'>";
				if ($registre["imagen"]!=null){
					echo "<img  class='img-rounded' id='imagenNoticia' src='";
					$img=$registre["imagen"];
					$contador=3;
					while ($contador<strlen($img)){
						$url.=$img[$contador];
						$contador=$contador+1;
					}
					echo $url;
					echo "'/>";
				} 
				
				
				
				
				echo "<div id='derecha'>";
				if ($registre["video"]!=null){
					echo "Esta noticia Contiene un video";
				}
				echo "<h2>";
				print_r($registre["titulo"]);
				echo "</h2>";
				echo "<p>";
				print_r($registre["descripcion"]);
				echo "</p>";
				
				echo "<a href='controller/pasandoIDNoticia.php?idnot=";
				print_r($registre["IDNOT"]);
				echo "'><button class='btn btn-default'>Leer mas</button></a>";
				
				echo "</div>
					</article>";

			}
			
			echo "</div>
				  </div>
				  </div>";
				
			
				
		}else{
			echo "Error en la consulta";
		}
	
	
		
			
	$conn->disconnect($con);



}else{
	echo "Error connectarte a la base de datos";
}

?>




