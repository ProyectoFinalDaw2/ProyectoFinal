<?php 
/****************************************************************************
 * mostrarRankingSemanalphp
 *
 * Este documento sirve para mostrar el ranking Semanal de las noticias.
 *
 * @author Judit Cerd� Izquierdo, Ibis Emmanuel Valencia
 * @version	0.1
 * @see ../db/db_connect.php
 * @see ../db/Selects.php
 * @see ../db/Selects_Noticia.php
 *
 *****************************************************************************/
include '../db/db_connect.php';
include '../db/Selects_Mangas.php';
include '../db/Selects.php';

/**************************************
 * LLAMAR FUNCI�N
 *
 * creamos la variable $llamar y llamamos a la funci�n controller
 *
 *
 * @var $llamar guarda un objeto de tipo ;
 *
 ***************************************/

$llamar=new  mostrarRankingGlobalMangas();
$llamar->mostrar_ranking_global_mangas();

Class mostrarRankingGlobalMangas{
	
	/**************************************
	 *  mostrar_ranking_semanal()
	 *
	 *  En esta funci�n obtendremos la conexi�n a la base de datos para realizar consultas selects para obtener
	 *  un listado de las 5 noticias mas vistas de forma semanal para imprimirlas por pantalla y cerramos la conexi�n
	 *
	 *
	 * @var $conn					guarda el objeto de tipo Connect
	 * @var $con					guarda el resultado de la conexi�n
	 * @var $selcUs					guarda el objeto Buscador
	 * @var $select					guarda el objeto BuscadorNoticia
	 * @var $resultat				obtiene la respuesta de la funcion llamada
	 * @var $registre				transforma el resultat en un array
	 * @var $resul				    obtiene la respuesta de la funcion llamada
	 ***************************************/
	public function mostrar_ranking_global_mangas(){
		$conn=new Connect();
		$con=$conn->connection();
		
		if ($con!=false){
			$selcUs=new Buscador();
		
			$select_man=new BuscadorMangas();
			$resultat=$select_man->obtenerRankingGlobalMangas($con);
		
		
			if ($resultat!=false){
				echo "<ol>";
				while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
						
					echo "<li>";
					if ($registre["imgportada"]!=null){
						echo "<img id='imgportada' src='";
						print_r($registre["imgportada"]);
						echo "' class='img-rounded'/>";
					}
					echo "<a href='../controller/pasandoIDMANGA.php?idmanga=";
					print_r($registre["IDMANGA"]);
					echo "'>";
					print_r ($registre["titulo"]);
					/*echo "</a> </br> Subido por:";
					$resul=$selcUs->veureNick($registre["ID"], $con);
					if ($resul!=false){
						echo $resul;
					}*/
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
	}
}



?>
