<?php /*FALTA ACABAR*/
/****************************************************************************
 * cargarUsuarios.php
 *
 * Este documento sirve para mostrar en la consola del Administrador los usuarios que no son administradores
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
 * creamos la variable $llamar y llamamos a la funcion cargarUsuario
 * 
 * @var $llamar guarda un objeto de tipo cargarDatos;
 * 
 ***************************************/
$llamar=new cargarUsuario();
$llamar->cargarUsuarios();

Class cargarUsuario{
	
	/************************************
	 * 
	 * cargarUsuario();
	 * 
	 * en esta clase se crea una conecxión con la base de datos para realizar una consulta select en la que recivirá todos los usuario
	 * que no sean administradores y los metera en un formulario. El formulario estarà compuesto de ...
	 * 
	 * @var $conn		guarda el objeto de tipo Connect
	 * @var $con		guarda el resultado de la conexión 
	 * @var $log
	 * @var $log		guarda el objeto Buscador
	 * @var $resultat	guarda el resultado de la consulta
	 * @var $registrarse guarda en un array el $resultat para mostrarlo por pantalla
	 * @var $col_value	obtiene los registros de uno en uno
	 * 
	 ************************************/
	public function cargarUsuarios(){
		
		$conn=new Connect();
		$con=$conn->connection();
		
		if ($con!=false){
			$log= new Buscador();
			$resultat=$log->veureTotsUsuariosNoAdmin($con);
		
		
			if ($resultat!=false){
		
		
				echo "Aqui tienes los usuarios registrados en Manga's Umbrella Corporation, qual deseas que tenga el poder de administrador?";
				echo "<form action='../controller/volverAdmin.php' method='post' onsubmit='return confirm(\"Estas seguro de que dea hacer el cambio?\");' >";
				echo "<select class='form-control' name='operacion' id='opciones'>";
				echo "<option value='administrador'>Hacer Administrador</option>";
				echo "<option value='borrar'>Borrar Usuario</option>";
				echo "</select>";
				echo "<div class='radio id='margen''>";
				while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {
		
						
					foreach ($registre as $col_value) {
		
						echo "<input type='radio' name='nickUsuario' value='$col_value' >$col_value</br>";
		
					}
		
		
				}
				echo "</div>";
				echo "<input type='submit' class='btn btn-default' value='Enviar'>";
				echo "</form>";
		
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