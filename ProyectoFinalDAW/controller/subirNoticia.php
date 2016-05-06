<?php
session_start();
include '../db/db_connect.php';
include '../db/noticias.php';
include '../db/Selects.php';
include '../db/Selects_Noticia.php';

print_r($_REQUEST);
var_dump($_FILES);

$nick=$_SESSION["inicioSesion"];

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$noticia = $_POST['noticia'];
$fecha =$_POST['fecha'];

$imagen=$_FILES['foto']['name'];
$imagen2=$_FILES['foto']['tmp_name'];
$img_type = $_FILES['foto']['type'];


$video=$_FILES['video']['name'];
$video2=$_FILES['video']['tmp_name'];




$conn=new Connect();
$con=$conn->connection();


if ($con!=false){
	
		$selec=new Buscador();
		$id=$selec->obtenerID($nick, $con);

		
		if ($id!=false){

			$noticias=new Noticia($titulo, $descripcion, $noticia, $fecha);
			$insertar=$noticias->insertarNoticia($id, $con);
			
			if ($insertar==true){
				
				$selc_not=new BuscadorNoticia();
				$idnot=$selc_not->obtenerID($con);
				
				if ($idnot!=false){
					if ($imagen!= null){
							
						if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
								strpos($img_type, "jpg")) || strpos($img_type, "png")))
						{
							$img=$noticias->imagen($imagen, $imagen2, $idnot, $con);
								
							if ($img==true){
								echo "yes";
							}else{
								echo "Error al inserar imagen";
							}
						}else{
							echo "No subas nada que no sea una imagen ;)";
						}
							
					}
					
					if ($video != null){
						
							$vid=$noticias->video($video, $video2, $idnot, $con);
							
							
							if ($vid==true){
								echo "video OK";
							}else{
								echo "Error al insertar video";
								
							}
					
						
					}
					
					$pag=$_SERVER['HTTP_REFERER'];
					$location="Location: ".$pag;
					header($location);
					
				}else{
					echo "Error al obtener id de la ultima noticia subida";
				}
				
				
				
			}else{
				echo "Error al insertar noticia en la BDD";
			}

		}else{
			echo "Error al Obtener ID";
		}

}else{
	echo "Error connectarte a la base de datos";
}


?>