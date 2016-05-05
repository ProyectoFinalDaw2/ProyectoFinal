<?php
/****************************************************************************
 * comprueva_contrasenya.php
 *
 * Este documento sirve para comprobar si la contraseña que ha introducido el usuario 
 * corresponde a la del usuario actual para proceder a su cambio
 * 
 * @author Judit Cerdà Izquierdo, Ibis Emmanuel Valencia
 * @version	0.1
 * @see ../db/db_connect.php
 * @see ../db/Selects.php
 *
 *****************************************************************************/
include '../db/db_connect.php';
include '../db/Selects.php';


/**************************************
 * LLAMAR FUNCIÓN
 *
 * se guarda en la variable $contrasenya la variable obtenida de un formulario, para obtener la contraseña introducida por el usuario
 * y a continuación creamos la variable $llamar y llamamos a la función cargarDatos enviándole la
 * contraseña obtenido.
 *
 * @var $contrasenya guarda la contraseña que ha introducido el usuario
 * @var $llamar guarda un objeto de tipo compruevaContrasenya;
 *
 ***************************************/
$contrasenya=$_POST["contrasenya"];

$llamar=new compruevaContrasenya();
$llamar->comprueva_contrasenya($contrasenya);


Class compruevaContrasenya{
	
	/**************************************
	 * comprueva_contrasenya($contrasenya)
	 *
	 * En esta función obtendremos la conexión de la base de datos para llamar a una
	 * consulta select, en la cual obtendremos una respuesta a una busqueda para saber si la contraseña
	 * introducida corresponde con la del usuario actual
	 * 
	 * 
	 * @var $conn					guarda el objeto de tipo Connect
	 * @var $con					guarda el resultado de la conexión
	 * @var $sel_contrasenya		guarda el objeto Buscador
	 * @var $resultat				obtiene la respuesta de la funcion llamada
	 *
	 ***************************************/
	public function comprueva_contrasenya($contrasenya){
		$conn=new Connect();
		$con=$conn->connection();
		
		if ($con!=false){
			try{
				$sel_contrasenya = new Buscador();
				$resultat=$sel_contrasenya->veureUsuariContrasenya($contrasenya, $con);
				if ($resultat==true){
					echo "si";
				}else{
					echo "no";
				}
		
			}catch (ExceptionSQL $e){
				echo "Fallo al realizar la consulta";
			}
		
		}else{
			echo "Fallo al conectarse a la base de datos";
		
		}
		
	}
}




?>