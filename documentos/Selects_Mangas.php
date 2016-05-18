<?php
/****************************************************************************
 * Selects_Noticia.php
 *
 * Este documento sirve hacer consultas para obtener datos de la tabla noticia
 *
 * @author Judit Cerd� Izquierdo, Ibis Emmanuel Valencia
 * @version	0.1
 *
 *
 *****************************************************************************/
Class BuscadorMangas{

	//Metodos
	/**************************************
	 * ObtenerMAXIDMAN($con);
	 *
	 *En esta funci�n se obtiene la id del ultimo manga subido
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$col_value	si existe
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function ObtenerMAXIDMAN($con){
						try {
							$sql = "SELECT MAX(IDMANGA) FROM manga";
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
		//Metodos
				/**************************************
				 * ObtenerManID($con);
				 *
				 *En esta funci�n se obtiene la id del ultimo manga subido
				 *
				 * @var $con		guarda el resultado de la conexi�n
				 * @var sql 		guarda la consulta a realizar
				 * @var $resultat	guarda el resultado de la consulta
				 *
				 * @return	$col_value	si existe
				 * @return	false		si no existe
				 *
				 ***************************************/
				public function ObtenerManID($manga,$con){
						try {
									$sql = "SELECT IDMANGA FROM manga WHERE titulo='$manga'";
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
				/**************************************
				 * obtenerIDVER($idmanga,$con);
				 *
				 *En esta funci�n se obtiene la id del ultimo manga subido
				 *
				 * @var $con		guarda el resultado de la conexi�n
				 * @var sql 		guarda la consulta a realizar
				 * @var $resultat	guarda el resultado de la consulta
				 *
				 * @return	$col_value	si existe
				 * @return	false		si no existe
				 *
				 ***************************************/
				public function obtenerVerID($idman,$con){
							try {
				$sql = "SELECT IDVER FROM version WHERE IDMANGA=$idman";
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
	
	/**************************************
	 *obtenerUltimasNoticias($con);
	 *
	 *En esta funci�n obtendremos las 6 �ltimas noticias
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerUltimosMangas($con){
		try {
			$sql = "SELECT IDMANGA,titulo,imgportada FROM `manga` order BY IDMANGA DESC LIMIT 6 ";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;

	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}

	
	
	/**************************************
	 *obtenerTodoSobreMangas($con,$num);
	 *
	 *En esta funci�n obtendremos todos los mangas
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerTodoSobreMangas($con,$idmanga){
		try {
			$sql = "SELECT * FROM  manga WHERE IDMANGA=$idmanga;";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	
	/**************************************
	 *obtenerRankingSemanalMangas($con);
	 *
	 *En esta funci�n obtendremos las 5 noticias m�s vistas esta semana
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerRankingSemanalMangas($con){
		try {
			$sql = "SELECT * FROM `manga` order BY semanal DESC LIMIT 5";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	/**************************************
	 *obtenerRankingGlobalMangas($con);
	 *
	 *En esta funci�n obtendremos las 5 noticias m�s vistas esta semana
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerRankingGlobalMangas($con){
		try {
			$sql = "SELECT * FROM `manga` order BY global DESC LIMIT 5";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	/**************************************
	 *obteneAnteriores5Noticias($con,$num);
	 *
	 *En esta funci�n obtendremos las anteriores noticias de 5 en 5
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obteneAnteriores5Noticias($con,$num){
		try {
			$sql = "SELECT * FROM  noticias WHERE IDNOT>=$num order BY IDNOT ASC LIMIT 5;";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
		/**************************************
		 *Obtener Manga especifico($con,$idman);
		 *
		 *En esta funci�n obtendremos todos los datos de un manga especifico
		 *
		 * @var $con		guarda el resultado de la conexi�n
		 * @var sql 		guarda la consulta a realizar
		 * @var $idman		guarda la id del manga
		 * @var $resultat	guarda el resultado de la consulta
		 *
		 * @return	$resultat	para obtener todos los campos del select
		 * @return	false		si no existe
		 *
		 ***************************************/
		public function obtenerMangaEspecifico($con,$idmanga){
			try {
				$sql = "SELECT * FROM manga WHERE IDMANGA=$idmanga";
				$resultat = mysqli_query($con,$sql);
		
				return $resultat;
		
			}catch (ExceptionSQL $e){
				return false;
			}	
		}
		/**************************************
		 *Obtener Todos Mangas ($con,$idman);
		 *
		 *En esta funci�n obtendremos todos los datos de un manga especifico
		 *
		 * @var $con		guarda el resultado de la conexi�n
		 * @var sql 		guarda la consulta a realizar
		 * @var $idman		guarda la id del manga
		 * @var $resultat	guarda el resultado de la consulta
		 *
		 * @return	$resultat	para obtener todos los campos del select
		 * @return	false		si no existe
		 *
		 ***************************************/
		public function obtenerTodosMangas($con,$idmanga){
			try {
				$sql = "SELECT * FROM manga";
				$resultat = mysqli_query($con,$sql);
		
				return $resultat;
		
			}catch (ExceptionSQL $e){
				return false;
			}	
		}
		
		/**************************************
		 *Obtener Cap�tulo de  Manga especifico($con,$idman);
		 *
		 *En esta funci�n obtendremos todos los datos de un manga especifico
		 *
		 * @var $con		guarda el resultado de la conexi�n
		 * @var sql 		guarda la consulta a realizar
		 * @var $idman		guarda la id del manga
		 * @var $resultat	guarda el resultado de la consulta
		 *
		 * @return	$resultat	para obtener todos los campos del select
		 * @return	false		si no existe
		 *
		 ***************************************/
		public function obtenerCapituloEspecifico($con,$idmanga){
			try {
				$sql = "SELECT * FROM sube WHERE IDMANGA=$idmanga";
				$resultat = mysqli_query($con,$sql);
		
				return $resultat;
		
			}catch (ExceptionSQL $e){
				return false;
			}
		}
		
		/**************************************
		 *Obtener todos los capitulos de sube;
		 *
		 *En esta funci�n obtendremos todos los datos de un manga especifico
		 *
		 * @var $con		guarda el resultado de la conexi�n
		 * @var sql 		guarda la consulta a realizar
		 * @var $idman		guarda la id del manga
		 * @var $resultat	guarda el resultado de la consulta
		 *
		 * @return	$resultat	para obtener todos los campos del select
		 * @return	false		si no existe
		 *
		 ***************************************/
		public function obtenerTodosCapitulos($con,$idvers){
			try {
								
				$sql = "SELECT 	* FROM sube WHERE IDVER=$idvers";
				$resultat = mysqli_query($con,$sql);
		
				return $resultat;
		
			}catch (ExceptionSQL $e){
				return false;
			}
		}
	
	/**************************************
	 * obtenerContadorGlobal($con,$idnot);
	 *
	 *En esta funci�n se obtiene el contador global
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$col_value	si existe
	 * @return	false		si no existe
	 *
	 ***************************************/
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
	/**************************************
	 *obtenerContadorSemanal($con,$idnot);
	 *
	 *En esta funci�n se obtiene el contador semanal
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$col_value	si existe
	 * @return	false		si no existe
	 *
	 ***************************************/
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
	
	
		/**************************************
		 *obtenerRankingGlobal($con);
		 *
		 *En esta funci�n obtendremos las 5 noticias m�s vistas globalmente
		 * @var $con		guarda el resultado de la conexi�n
		 * @var sql 		guarda la consulta a realizar
		 * @var $idnot		guarda la id de la noticia
		 * @var $resultat	guarda el resultado de la consulta
		 *
		 * @return	$resultat	para obtener todos los campos del select
		 * @return	false		si no existe
		 *
		 ***************************************/
		public function obtenerRankingGlobal($con){
			try {
				$sql = "SELECT * FROM `noticias` order BY global DESC LIMIT 5";
				$resultat = mysqli_query($con,$sql);
		
				return $resultat;
		
			}catch (ExceptionSQL $e){
				return false;
			}
		
		
		}
	
	/**************************************
	 *obtenerRankingSemanal($con);
	 *
	 *En esta funci�n obtendremos las 5 noticias m�s vistas esta semana
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerRankingSemanal($con){
		try {
			$sql = "SELECT * FROM `noticias` order BY semanal DESC LIMIT 5";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	/**************************************
	 *obtenerDestacadaGlobal($con);
	 *
	 *En esta funci�n obtendremos la noticia  m�s vista
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerDestacadaGlobal($con){
		try {
			$sql = "SELECT * FROM `noticias` order BY global DESC LIMIT 1";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	/**************************************
	 *obtenerDestacadaGlobal2($con);
	 *
	 *En esta funci�n obtendremos las 2 noticias m�s vistas
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $idnot		guarda la id de la noticia
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$resultat	para obtener todos los campos del select
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerDestacadaGlobal2($con){
		try {
			$sql = "SELECT * FROM `noticias` order BY global DESC LIMIT 2";
			$resultat = mysqli_query($con,$sql);
	
			return $resultat;
	
		}catch (ExceptionSQL $e){
			return false;
		}
	
	
	}
	
	
	/**************************************
	 *ObtenerTituloManga($con);
	 *
	 *En esta funci�n se obtiene el titulo del manga en concreto
	 *
	 * @var $con		guarda el resultado de la conexi�n
	 * @var sql 		guarda la consulta a realizar
	 * @var $resultat	guarda el resultado de la consulta
	 *
	 * @return	$col_value	si existe
	 * @return	false		si no existe
	 *
	 ***************************************/
	public function obtenerTituloNoticia($con){
		try {
			$sql = "SELECT titulo FROM  manga";
			$resultat = mysqli_query($con,$sql);
	
			while ($resultat = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
				foreach ($resultat as $col_value) {
					return $col_value;
				}
			}
	
		}catch (ExceptionSQL $e){
			return false;
		}
	}
	
	
			/**************************************
			 * actualizarUploader($con);
			 *
			 *En esta funci�n  se actualizar el contador de uploader
			 *
			 * @var $con		guarda el resultado de la conexi�n
			 * @var sql 		guarda la consulta a realizar
			 * @var $resultat	guarda el resultado de la consulta
			 *
			 * @return	true	si ha podido insetar
			 * @return	false	si no se ha podido insertar
			 *
			 ***************************************/
			public function actualizarUploader($id,$con){
			
				try{
					$sql="UPDATE uploader
						SET mangasSubidos=mangasSubidos+1
						WHERE  ID=$id LIMIT 1 ";
					$resul2=mysqli_query($con,$sql);
					return true;
				}catch (Exception $e){
					return false;
				}					
			}
			
			
	
}