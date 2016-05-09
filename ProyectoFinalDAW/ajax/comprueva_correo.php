<?php

/****************************************************************************

 * comprueva_correo.php

 *

 * Este documento sirve para comprobar si la dirección de correo electronico introducidos

 * ja esta en la base de datos

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

 * se guarda en la variable $correo la variable la variable obtenida de un formulario, para obtener la dirección de 

 * correo introducida por el usuario y a continuación creamos la variable $llamar y llamamos a la función compruevaCorreo

 * enviándole el correo obtenido.

 *

 * @var $correo guarda el correo que ha introducido el usuario

 * @var $llamar guarda un objeto de tipo ;

 *

 ***************************************/

$correo=$_POST["correo"];



$llamar= new compruevaCorreo();

$llamar->comprueva_correo($correo);





Class compruevaCorreo{

	

	

	/**************************************

	 * comprueva_correo($correo)

	 *

	 * En esta función obtendremos la conexión de la base de datos para llamar a una

	 * consulta select, en la cual obtendremos una respuesta a una busqueda para saber si el correo

	 * introducido corresponde a algun usuario

	 *

	 *

	 * @var $conn					guarda el objeto de tipo Connect

	 * @var $con					guarda el resultado de la conexión

	 * @var $sel_correo				guarda el objeto Buscador

	 * @var $resultat				obtiene la respuesta de la funcion llamada

	 *

	 ***************************************/

	public function comprueva_correo($correo){

		$conn=new Connect();

		$con=$conn->connection();

		

		if ($con!=false){

			try{

				$sel_correo = new Buscador();

				$resultat=$sel_correo->veureUsuariCorreu($correo, $con);

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