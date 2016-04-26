<?php
$nick = $_POST['nick'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$contrasena = $_POST['contrasena'];
$fecha = $_POST['fecha'];
$sexo = $_POST['sexo'];
$numero= $_POST['numero'];

$usuari=new usuario($nick, $correo, $nombre, $apellidos, $contrasena, $fecha, $sexo, $numero);
$usuari->insertarUsuario();


?>
