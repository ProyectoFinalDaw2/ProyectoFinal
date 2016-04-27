<?php

Class Usuario{
	
	//Variables
	private $nick;
	private $correo;
	private $nombre;
	private $apellidos; 
	private $contrasena;
	private $fecha;
	private $sexo; 
	private $numero;
	
	//Metodos
		
		//Constructo
			
			public function __construct($nick,$correo,$nombre,$apellidos,$contrasena,$fecha,$sexo,$numero){
				$this->nick=$nick;
				$this->correo=$correo;
				$this->nombre=$nombre;
				$this->apellidos=$apellidos;
				$this->contrasena=$contrasena;
				$this->fecha=$fecha;
				$this->sexo=$sexo;
				$this->numero=$numero;
			}
			
		//Setters/Getters
			
			//Nick
			public function getNick(){
				return $this->nick;
			}
			private function setNick($nick){
				$this->nick=$nick;
			}
			
			//Correo
			public function getCorreo(){
				return $this->correo;
			}
			private function setCorreo($correo){
				$this->correo=$correo;
			}
			
			//Nombre
			public function getNombre(){
				return $this->nombre;
			}
			private function setNombre($nombre){
				$this->nombre=$nombre;
			}
			
			//Apellidos
			public function getApellidos(){
				return $this->apellidos;
			}
			private function setApellidos($apellidos){
				$this->apellidos=$apellidos;
			}
			
			//Contraseña
			public function getContrasena(){
				return $this->contrasena;
			}
			private function setContrasena($contrasena){
				$this->contrasena=$contrasena;
			}
				
			//Fecha
			public function getFecha(){
				return $this->fecha;
			}
			private function setFecha($fecha){
				$this->fecha=$fecha;
			}
				
			//Sexo
			public function getSexo(){
				return $this->sexo;
			}
			private function setSexo($sexo){
				$this->sexo=$sexo;
			}
				
			//Apellidos
			public function getNumero(){
				return $this->numero;
			}
			private function setNumero($numero){
				$this->numero=$numero;
			}
			
		//Insertar Usuario En BDD
		
			public function insertarUsuario($con){
				
				try{
					
					$sql = "INSERT INTO usuarios (nick,correo,nombre,apellidos,contrasenya,fechaNacimiento,sexo,telefono)
					VALUES ('$this->nick','$this->correo','$this->nombre','$this->apellidos','$this->contrasena','$this->fecha','$this->sexo','$this->numero');";
					$resultat = mysqli_query($con, $sql);
					return true;
				}catch (Exception $e){
					return false;
				}
				
			
			}
			
}

?>