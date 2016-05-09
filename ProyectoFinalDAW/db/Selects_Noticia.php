<?php
Class BuscadorNoticia{

	//Metodos

	//Constructo
		
	public function __construct(){
			
	}
	
	public function obtenerIDMAX($con){
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
	
	
	//obtener 5 noticias
	public function obtenerPrimeras5Noticias($con,$num){
		try {
			$sql = "SELECT * FROM  noticias WHERE IDNOT<$num order BY IDNOT DESC LIMIT 5;";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
			return false;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	//obtener 5 noticias anteriores
	public function obteneAnteriores5Noticias($con,$num){
		try {
			$sql = "SELECT * FROM  noticias WHERE IDNOT>=$num order BY IDNOT ASC LIMIT 5;";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
			return false;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	//Obtener Noticia concreta
	public function obtenerNoticiaEspecifica($con,$idnot){
		try {
			$sql = "SELECT * FROM noticias WHERE IDNOT=$idnot";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	public function obtenerContadorGlobal($con,$idnot){
		try {
			$sql = "SELECT global FROM noticias WHERE IDNOT=$idnot";
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
	
	public function obtenerContadorSemanal($con,$idnot){
		try {
			$sql = "SELECT semanal FROM noticias WHERE IDNOT=$idnot";
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
	
	
	//Obtener noticias contador global
	public function obtenerRankingGlobal($con){
		try {
			$sql = "SELECT * FROM `noticias` order BY global DESC LIMIT 5";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	//Obtener noticias contador semanal
	public function obtenerRankingSemanal($con){
		try {
			$sql = "SELECT * FROM `noticias` order BY semanal DESC LIMIT 5";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	
	public function obtenerDestacadaGlobal($con){
		try {
			$sql = "SELECT * FROM `noticias` order BY global DESC LIMIT 1";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	public function obtenerDestacadaGlobal2($con){
		try {
			$sql = "SELECT * FROM `noticias` order BY global DESC LIMIT 2";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	
}