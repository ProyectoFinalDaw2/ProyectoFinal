<?php

include '../db/db_connect.php';
include '../db/Selects_Noticia.php';

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){

	$select_noticia=new BuscadorNoticia();
	$idnot=$select_noticia->obtenerID($con);
	
	$numBotones=intval($idnot/5);
	
	if ($idnot%5!=0){
		$numBotones=$numBotones+1;
	}
	
		$resultat=$select_noticia->obtenerPrimeras5Noticias($con);
	
	
		if ($resultat!=false){
			while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
				//print_r ($registre["IDNOT"]);
				echo " <article id='fondosBlancos'>";
				if ($registre["imagen"]!=null){
					echo "<img  class='img-rounded' id='imagenNoticia' src='";
					print_r($registre["imagen"]);
					echo "'/>";
				} 
				
				if ($registre["video"]!=null){
					echo "Esta noticia Contiene un video";
				}
				echo "<div id='derecha'>";
				echo "<h2>";
				print_r($registre["titulo"]);
				echo "</h2>";
				echo "<p>";
				print_r($registre["descripcion"]);
				echo "</p>";
				echo "<button class='btn btn-default' id='abrirNoticia' name='";
				print_r($registre["IDNOT"]);
				echo"'>Leer mas</button>";
				echo "</div>
					</article>";
		
			}
			
			
			echo "<div id='numeros'>";
			echo "<div class='btn-toolbar' role='toolbar'>"	;
			echo " <div class='btn-group'>";
			$contador=0;
			while ($contador<$numBotones){
				$contador=$contador+1;
				echo " <button type='button' class='btn btn-default' >$contador</button>";
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



<!-- 
						 <article id="fondosBlancos">
						<img  class="img-rounded" id="imagenNoticia" src="../style/imagenes/noticias.png"/>
						<div id="derecha">
						<h2>London</h2>
						<h4>Explicacion sobre londes</h4>	
						<p>London is the capital city of England. It is the most populous city in the United Kingdom,
							with a metropolitan area of over 13 million inhabitants...</p>
						
						<button class="btn btn-default">Leer más</button>
						</div>
					</article> -->