<?php

Class Buscador{
	
	//Metodos
	
		//Constructo
			
		public function __construct(){
			
		}
		
		public function veureTot($nick,$con){
			try {
				$sql = "SELECT correo,nombre,apellidos,fechaNacimiento,sexo,telefono FROM usuario WHERE nick='$nick'";
				$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
					
				return $resultat;
					
			}catch (ExceptionSQL $e){
				return false;
			}
		
		
		}
		
		
		public function veureUsuari($nick,$con){
			try {
				$sql = "SELECT * FROM usuario WHERE nick='$nick'";
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
				$sql = "SELECT * FROM usuario WHERE correo='$correo'";
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
				$sql = "SELECT nick FROM usuario WHERE contrasenya='$contrasena' AND correo='$correo'";
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
		
		public function veureImatge($nick,$con){
			try {
				$sql = "SELECT imagen FROM usuario WHERE nick='$nick'";
				$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
					
				return $resultat;
					
			}catch (ExceptionSQL $e){
				return false;
			}
		
		
		}
		
		public function veureUsuariContrasenya($contrasenya,$con){
			try {
				$sql = "SELECT * FROM usuario WHERE contrasenya='$contrasenya'";
				$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
					
				while ($resultat = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
					return true;
				}
		
				return false;
					
			}catch (ExceptionSQL $e){
				return false;
			}
		
		
		}
		
		//Control administrador
		public function obtenerID($nick,$con){
			try {
				$sql = "SELECT id FROM usuario WHERE nick='$nick'";
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
		public function esAdministrador($id,$con){
			try {
				$sql = "SELECT administrador FROM administrador WHERE id='$id'";
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
		
		public function veureTotsUsuariosNoAdmin($con){
			try {
				$sql = "SELECT us.nick FROM usuario us, administrador ad WHERE us.id!=ad.id;";
				$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
				
					return $resultat;
				 
			}catch (ExceptionSQL $e){
				return false;
			}
				
		
		}
}


?>