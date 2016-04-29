<?php
session_start();
unset( $_SESSION["inicioSesion"]);  
$pag=$_SERVER['HTTP_REFERER'];
$location="Location: ".$pag;
header($location);
?>