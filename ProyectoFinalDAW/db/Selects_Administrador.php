<?php

Class BuscadorAdministrador{

	//Metodos

	//Constructo
		
	public function __construct(){
			
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

}


?>
