<?php

Class UsuarioNormal{
	
			
			public function __construct(){
			
			}
			
			//INSERTAR en administrador
			public function meterEnTablaNormal($con,$id){
					
				try{
					$sql = "INSERT INTO usuarioNormal VALUES  ($id,1)";
					$resultat = mysqli_query($con, $sql);
					return true;
				}catch (Exception $e){
					return false;
				}
					
					
			}
			
			public function desactivar($id,$con){
				try{
					$sql = "UPDATE usuarioNormal SET activo=0 WHERE id=$id";
					$resultat = mysqli_query($con, $sql);
					return true;
				}catch (Exception $e){
					return false;
				}
					
			}

			
				
}


