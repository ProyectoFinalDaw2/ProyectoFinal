<?php
session_start();
unset( $_SESSION["inicioSesion"]);  
unset( $_SESSION["administrador"]);
header('Location: ../index.php');
?>