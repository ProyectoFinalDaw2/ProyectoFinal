<?php

Class Connect{
	
	//Variables
	protected static  $ip = 'localhost';
	protected static  $usuari = 'WEB';
	protected static  $password = '1234';
	protected static  $db_name = 'mangas';
	
	
	//Metodos
		//Constructor
		
		public function __construc(){
		
		}
		
	
	
		//Conection

			public function connection(){

				try{

					$con = mysqli_connect(Connect::$ip,Connect::$usuari,Connect::$password,Connect::$db_name);

					return $con;

				}catch(Exception $e){

					return false;

				}

			}

			//DisConnection

			public function disconnect($con){

				mysqli_close($con);

			}

	
	
}


?>