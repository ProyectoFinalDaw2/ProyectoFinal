<?php

/****************************************************************************
 * controll.php
 * 
 * Este documento sirve para comprobar si un usuario que ha iniciado sesi�n en la p�gina es administrador
 *
 * @author Judit Cerd� Izquierdo, Ibis Emmanuel Valencia
 * @version	0.1
 * @see ../db/db_connect.php
 * @see ../db/Selects.php
 * @see ../db/Selects_Administrador.php
 *
 *****************************************************************************/

session_start();
include '../db/Selects.php';
include '../db/Selects_Administrador.php';
include '../db/db_connect.php';

/**************************************
 * LLAMAR FUNCI�N
 *
 * creamos la variable $llamar y llamamos a la funci�n controller
 * 
 *
 * @var $llamar guarda un objeto de tipo ;
 *
 ***************************************/


$llamar= new controll();
$llamar->controll();


Class controll{

	/**************************************
	 * controll();
	 *
	 * En esta funci�n comprobaremos si el usuario ha iniciado sesi�n, guardaremos en la variable $nick
	 * el nick del usuario actual, hacemos la conexi�n a la base de datos, obtenemos la id del usuario actual 
	 * gr�cias al nick y a continuaci�n comprobamos si tiene derechos de administrador, en caso de que los tenga 
	 * en una variable de sesi�n para acceder a ella des de otras p�guinas.
	 *
	 *
	 * @var $conn					guarda el objeto de tipo Connect
	 * @var $con					guarda el resultado de la conexi�n
	 * @var $sel_nick    			guarda el objeto Buscador
	 * @var $resultat				obtiene la respuesta de la funcion llamada
	 *

	 ***************************************/

	public function controll(){

		if (isset($_SESSION["inicioSesion"])){

			$nick=$_SESSION["inicioSesion"];
			$conn=new Connect();
			$con=$conn->connection();

			if ($con!=false){
				$sel=new Buscador();
				$id=$sel->obtenerID($nick, $con);

				if ($id!=false){

					$sel_admin=new BuscadorAdministrador();

					$admin=$sel_admin->esAdministrador($id, $con);

					if($admin==true){

						$_SESSION["administrador"]="si";

						echo $_SESSION["administrador"];
					}else{
						echo "no";
					}
				
				}else{

					echo "Error al obtener ID";
				}

			}else{

				echo "Error connectarte a la base de datos";

			}


		}else{

			echo "no";

		

		}

		

	}

}




?>