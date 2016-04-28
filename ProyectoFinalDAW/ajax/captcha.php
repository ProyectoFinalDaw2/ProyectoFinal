<?php
/****************************************************************************
* captcha.php
*
* Este documento sirve para crear una imagen/gif de un captcha, el cual sera mostrado en otra página medienta una peticion ajax
*
* 
*
* @author Judit Cerdà Izquierdo, Ibis Emmanuel
*
*****************************************************************************/


//aleatorio
$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
$numerodeletras=8; //numero de letras para generar el texto
$cadena = ""; //variable para almacenar la cadena generada
for($i=0;$i<$numerodeletras;$i++)
{
	$cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); /*Extraemos 1 caracter de los caracteres
	entre el rango 0 a Numero de letras que tiene la cadena */
}
 

$aleatorio=$cadena;;
setcookie("captcha", $aleatorio, time() + (86400 * 30),"/");


$captcha = imagecreatefromgif("../style/imagenes/bgcaptcha.gif");

$colText = imagecolorallocate($captcha, 0, 0, 0);

imagestring($captcha, 5, 16, 7, $aleatorio , $colText);

header("Content-type: image/gif");

imagegif($captcha);


?>
