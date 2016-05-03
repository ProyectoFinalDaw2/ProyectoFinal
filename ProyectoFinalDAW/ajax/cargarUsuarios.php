<?php
include '../db/db_connect.php';
include '../db/Selects.php';

$conn=new Connect();
$con=$conn->connection();

if ($con!=false){
	$log= new Buscador();
	$resultat=$log->veureTotsUsuariosNoAdmin($con);
	
	
	if ($resultat!=false){

		echo "Aqui tienes los usuarios registrados en Manga's Umbrella Corporation, qual deseas que tenga el poder de administrador?";
		echo "<form action='../controller/volverAdmin.php' method='post' onsubmit='return confirm();' >";
		echo "<select class='form-control' name='operacion'>";
		echo "<option value='administrador'>Hacer Administrador</option>";
		echo "<option value='borrar'>Borrar Usuario</option>";
		echo "</select>";
		echo "<div class='radio id='margen''>";
		while ($registre = mysqli_fetch_array($resultat, MYSQL_ASSOC)) {

			// només si volem mostrar tots els camps de la consulta

			
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








?>