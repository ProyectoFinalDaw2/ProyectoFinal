<?php

session_start();
include '../db/usuario.php';
include '../db/db_connect.php';

$campo = $_POST['campo'];
$variable = $_POST['variable'];
$nick=$_SESSION["inicioSesion"];

$files=$_FILES['foto']['name'];
$files2=$_FILES['foto']['tmp_name'];
$img_type = $_FILES['foto']['type'];

$conn=new Connect();
$con=$conn->connection();


if ($con!=false){
			if ($campo=="imagen"){
				if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
						strpos($img_type, "jpg")) || strpos($img_type, "png")))
				{
					$cambio=new Usuario("", "", "", "", "", "", "", "");
					$cambio->imagen($files, $files2, $nick, $con);
					
						
					$pag=$_SERVER['HTTP_REFERER'];
					$location="Location: ".$pag;
					header($location);
				}else{

					echo "No intentes subir nada que no sea una imagen ;)";
				}
				
						
				
			}else{
				
				$cambio=new Usuario("", "", "", "", "", "", "", "");
				$resultat=$cambio->cambiarUsuario($con, $campo, $variable, $nick);
				if ($resultat==true){
					if ($campo=="nick"){
						$_SESSION["inicioSesion"]=$variable;
					}
					$pag=$_SERVER['HTTP_REFERER'];
					$location="Location: ".$pag;
					header($location);
					
				}else{
					echo "Fallo en la consulta";
				}
			}
}else{
	echo "Error connectarte a la base de datos";
}

?>