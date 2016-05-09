<?php

/****************************************************************************

 * comprueva_nick.php

 *

 * Este documento sirve para comprobar si el nick introducido ja esta en la base de datos

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

 * se guarda en la variable $nick la variable obtenida de un formulario, el nick

 * introducido por el usuario y a continuación creamos la variable $llamar y llamamos a la función compruevaNick

 * enviándole el nick obtenido.

 *

 * @var $nick guarda el nick que ha introducido el usuario

 * @var $llamar guarda un objeto de tipo ;

 *

 ***************************************/

$nick=$_POST["autor"];



$llamar= new compruevaNick();

$llamar->comprueva_nick($nick);





Class compruevaNick{

	

	/**************************************

	 * comprueva_correo($correo)

	 *

	 * En esta función obtendremos la conexión de la base de datos para llamar a una

	 * consulta select, en la cual obtendremos una respuesta a una busqueda para saber si el nick

	 * introducido corresponde a algun usuario

	 *

	 *

	 * @var $conn					guarda el objeto de tipo Connect

	 * @var $con					guarda el resultado de la conexión

	 * @var $sel_nick    			guarda el objeto Buscador

	 * @var $resultat				obtiene la respuesta de la funcion llamada

	 *

	 ***************************************/

	public function comprueva_nick($nick){

		$conn=new Connect();

		$con=$conn->connection();

		

		if ($con!=false){

			try{

				$sel_nick = new Buscador();

				$resultat=$sel_nick->veureUsuari($nick, $con);

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