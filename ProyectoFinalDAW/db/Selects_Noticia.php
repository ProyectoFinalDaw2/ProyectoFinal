<?php
Class BuscadorNoticia{

	//Metodos

	//Constructo
		
	public function __construct(){
			
	}
	
	public function obtenerID($con){
		try {
			$sql = "SELECT MAX(IDNOT) FROM noticias";
			$resultat = mysqli_query($con,$sql);
				
			while ($resultat = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
				foreach ($resultat as $col_value) {
					return $col_value;
				}
			}
	
			return false;
				
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	//obtener las ultimas 6 noticias subidas
	public function obtenerUltimasNoticias($con){
		try {
			$sql = "SELECT IDNOT,titulo FROM `noticias` order BY IDNOT DESC LIMIT 6 ";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
			return false;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	
	//obtener las ultimas 6 noticias subidas
	public function obtenerPrimeras5Noticias($con){
		try {
			$sql = "SELECT * FROM `noticias` LIMIT 5;";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
			return false;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
}