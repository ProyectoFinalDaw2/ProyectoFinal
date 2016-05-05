<?php
/****************************************************************************
 * cargarDatos.php
 *
 * Este documento sirve para mostrar en el perfil del usuario todos sus datos 
 *  
 * @author Judit Cerdà Izquierdo, Ibis Emmanuel Valencia
 * @version	0.1
 * @see ../db/db_connect.php
 * @see ../db/Selects.php
 *
 *****************************************************************************/
session_start();
include '../db/db_connect.php';
include '../db/Selects.php';

/**************************************
 * LLAMAR FUNCIÓN
 * 
 * se guarda en la variable $nick la variable sesión indicada para obtener el nick del usuario
 * y a continuación creamos la variable $llamar y llamamos a la funcion cargarDatos enviándole en
 * nick obtenido.
 * 
 * @var $nick guarda el nick del usuario
 * @var $llamar guarda un objeto de tipo cargarDatos;
 * 
 ***************************************/
$nick=$_SESSION["inicioSesion"];

$llamar=new cargarDatos();
$llamar->cargarDatos($nick);

Class cargarDatos{
	

	/**************************************
	 * cargarDatos($nick);
	 * 
	 * En esta función obtendremos la conexión de la base de datos para llamar a una 
	 * consulta select, en la cual llegarán los datos de los usuarios mezclados con el nombre de sus campos 
	 * obtenidos des de una variable $llista que se mostraran por pantalla mediante una petición ajax
	 * 
	 * @var $llista		array que contiene el nombre de los campos a mostar
	 * @var $contador	se utilizará para imprimir los campos de $llista	
	 * @var $conn		guarda el objeto de tipo Connect
	 * @var $con		guarda el resultado de la conexión 
	 * @var $log		guarda el objeto Buscador
	 * @var $resultat	guarda el resultado de la consulta
	 * @var $registrarse guarda en un array el $resultat para mostrarlo por pantalla
	 * @var $col_value	obtiene los registros de uno en uno
	 * 
	 ***************************************/
	public function cargarDatos($nick){
		
	$llista = array();
	array_push($llista, "Correo");
	array_push($llista, "Nombre");
	array_push($llista, "Apellidos");
	array_push($llista, "Fecha de Nacimiento");
	array_push($llista, "Sexo");
	array_push($llista, "Telefono");
	
	$contador=0;
	
	
	$conn=new Connect();
	$con=$conn->connection();
	
	if ($con!=false){
		$log= new Buscador();
		$resultat=$log->veureTot($nick,$con);
	
		if ($resultat!=false){
	
	
			while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
	
	
	
				
	
				foreach ($registre as $col_value) {
	
					echo "<h4>$llista[$contador]</h4>";
					echo "$col_value</br>";
					$contador=$contador+1;
	
				}
	
	
	
			}
	
			$conn->disconnect($con);
	
	
		}else{
			echo "ERROR de la consulta";
		}
	
	}else{
		echo "Error connectarte a la base de datos";
	}

		
	}
	
}





?>