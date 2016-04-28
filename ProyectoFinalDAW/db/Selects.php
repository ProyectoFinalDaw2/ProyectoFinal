<?php

Class Buscador{
	
	//Metodos
	
		//Constructo
			
		public function __construct(){
			
		}
		
		public function veureUsuari($nick,$con){
			try {
				$sql = "SELECT * FROM usuarios WHERE nick='$nick'";
				$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
			
			while ($resultat = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
   				return true;
			 }
			 
			 return false;
    			
			}catch (ExceptionSQL $e){
				return false;
			}
			
		
		}
		
		public function veureUsuariCorreu($correo,$con){
			try {
				$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
				$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
					
				while ($resultat = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
					return true;
				}
		
				return false;
				 
			}catch (ExceptionSQL $e){
				return false;
			}
				
		
		}
		
		public function IniciarSesion($correo,$contrasena,$con){
			try {
				$sql = "SELECT nick FROM usuarios WHERE contrasenya='$contrasena' AND correo='$correo'";
				$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
					
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
}


?>