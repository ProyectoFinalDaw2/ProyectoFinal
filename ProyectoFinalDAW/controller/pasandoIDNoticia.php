<?php
include '../db/db_connect.php';
include '../db/Selects_Noticia.php';
include '../db/noticias.php';

session_start();

$idnot=$_GET["idnot"];
$_SESSION["IDNOT"]=$idnot;

$conn=new Connect();
$con=$conn->connection();


if ($con!=false){

	$select=new BuscadorNoticia();
	$global=$select->obtenerContadorGlobal($con, $idnot);
	
	$semanal=$select->obtenerContadorSemanal($con, $idnot);

		
		$global=$global+1;
		$semanal=$semanal+1;
		
		$not=new Noticia("", "", "", "");
		$update=$not->contadores($idnot, $con, $global, $semanal);
		
		if ($update!=false){
			header('Location: ../view/leerNoticia.php');
		}else{
			echo "Error al incrementar contador";
		}
		

	
}else{
	echo "Error connectarte a la base de datos";
}






?>