<?php

include '../db/db_connect.php';
include '../db/Selects_Noticia.php';

$num=$_POST["num"];
$primera=false;
$ultima=false;
$previusID=null;
$next=null;

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){

	$select_noticia=new BuscadorNoticia();
	
	$idmax=$select_noticia->obtenerIDMAX($con);
	
	 if ($num==0){
	 	$primera=true;
	 	$num=$idmax+1;
	 }
	
	
	 if ($num<5){
	 	$ultima=true;
	 }
	
		$resultat=$select_noticia->obtenerPrimeras5Noticias($con,$num);
	
		$contador=0;
		if ($resultat!=false){
			while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
				//print_r ($registre["IDNOT"]);
				echo " <article id='fondosBlancos'>";
				if ($registre["imagen"]!=null){
					echo "<img  class='img-rounded' id='imagenNoticia' src='";
					print_r($registre["imagen"]);
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
				
				echo "<a href='../controller/pasandoIDNoticia.php?idnot=";
				print_r($registre["IDNOT"]);
				echo "'><button class='btn btn-default'>Leer mas</button></a>";
				
				echo "</div>
					</article>";
				
				
				if ($contador==4){
					$next=$registre["IDNOT"];
				}
				
				$contador=$contador+1;
		
			}
			
			$resultat2=$select_noticia->obteneAnteriores5Noticias($con, $num);
				
			$contador2=0;
			if ($resultat2!=false){
				
				while ($registre2 = mysqli_fetch_array($resultat2, MYSQL_ASSOC)) {
					
					
			
					if ($contador2==4){
						
						$previusID=$registre2["IDNOT"];
						$previusID=$previusID+1;
						
					}
			
					$contador2=$contador2+1;
			
				}
					
			}
			
			
			
			echo "<div id='numeros'>";
			echo "<div class='btn-toolbar' role='toolbar'>"	;
			echo " <div class='btn-group'>";
			if ($primera==false && $previusID!=null){
				
				echo " <button type='button' class='btn btn-default' id='previus' value=$previusID>"."<"."</button>";
				
			}
			
			if ($ultima==false && $next!=null){
				echo " <button type='button' class='btn btn-default' id='next' value='$next'>".">"."</button>";
				
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



