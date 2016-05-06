<?php

Class Noticia{
	
	//Variables
	private $titulo; 
	private $descripcion;
	private $noticia;
	private $fecha;

	//Metodos
	
		//Constructo
			
		public function __construct($titulo,$descripcion,$noticia,$fecha){
			$this->titulo=$titulo;
			$this->descripcion=$descripcion;
			$this->noticia=$noticia;
			$this->fecha=$fecha;
		}
		
		//Setters/Getters
			
		//Titulo
		public function getTitulo(){
			return $this->titulo;
		}
		private function setTitulo($titulo){
			$this->titulo=$titulo;
		}
		
		//Descripcion
		public function getDescripcion(){
			return $this->descripcion;
		}
		private function setDescripcion($descripcion){
			$this->descripcion=$descripcion;
		}
			
		
		//Noticia
		public function getNoticia(){
			return $this->noticia;
		}
		private function setNoticia($noticia){
			$this->noticia=$noticia;
		}
		
		//Fecha
		public function getFecha(){
			return $this->fecha;
		}
		private function setFecha($fecha){
			$this->fecha=$fecha;
		}
			
		
		//Insertar Noticia En BDD
		
		public function insertarNoticia($id,$con){
		
			try{
					
				$sql = "INSERT INTO noticias (id,titulo,noticia,descripcion,fecha)
				VALUES ($id,'$this->titulo','$this->noticia','$this->descripcion','$this->fecha');";
				$resultat = mysqli_query($con, $sql);
				return true;
			}catch (Exception $e){
				return false;
			}
		
				
		}
		
		
		//Insertar Imagen EN BDD
			
		public function imagen($files,$files2,$idnot,$con){
			$dir_destino="../style/imagenes/noticias/imagenes/";
			$imagen_subida=$dir_destino.basename($files);
			if(!is_writable($dir_destino)){
				//echo "no tiene permisos";
				return false;
			}else{
				if(is_uploaded_file($files2)){
					if (move_uploaded_file($files2, $imagen_subida)) {
						$sql = "UPDATE noticias SET  imagen='$imagen_subida' WHERE IDNOT='$idnot';";
						$resultat = mysqli_query($con, $sql);
						return true;
						//echo "El archivo es fue cargado exitosamente.\n";
						return true;
						//echo "<img src='http://localhost:8080/". basename($imagen_subida) ."' />";
					} else {return false;
					//echo "Posible ataque de carga de archivos!\n";
					}
				}else{return false;
				//echo "Posible ataque del archivo subido: ";
				}
			}
		}
		
		//Insertar VIDEO EN BDD
			
		public function video($files,$files2,$idnot,$con){
			$dir_destino="../style/imagenes/noticias/video/";
			$imagen_subida=$dir_destino.basename($files);
			if(!is_writable($dir_destino)){
				echo "no tiene permisos";
				return false;
			}else{
				if(is_uploaded_file($files2)){
					if (move_uploaded_file($files2, $imagen_subida)) {
						$sql = "UPDATE noticias SET  video='$imagen_subida' WHERE IDNOT='$idnot';";
						$resultat = mysqli_query($con, $sql);
						return true;
						echo "El archivo es fue cargado exitosamente.\n";
						//return true;
						//echo "<img src='http://localhost:8080/". basename($imagen_subida) ."' />";
					} else {//return false;
					echo "Posible ataque de carga de archivos!\n";
					}
				}else{return false;
				echo "Posible ataque del archivo subido: ";
				}
			}

		}
			
			
			
			
}

?>