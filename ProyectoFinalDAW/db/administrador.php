<?php

Class Administrador{
	
	//Constructo
		
	public function __construct(){
		
	}
		
			//INSERTAR en administrador 
			public function convertirAdmin($con,$id){
					
				try{
					$sql = "INSERT INTO administrador VALUES  ($id,0,1)";
					$resultat = mysqli_query($con, $sql);
					return true;
				}catch (Exception $e){
					return false;
				}
					
					
			}
				
}

