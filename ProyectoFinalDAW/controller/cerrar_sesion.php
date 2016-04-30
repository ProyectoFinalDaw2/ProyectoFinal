<?php
session_start();
unset( $_SESSION["inicioSesion"]);  
header('Location: ../index.php');
?>