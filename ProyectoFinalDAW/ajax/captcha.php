<?php
/****************************************************************************
* captcha.php
*
* Este documento sirve para crear una imagen/gif de un captcha, el cual sera mostrado en otra página mediante una petición ajax
*
* 
*
* @author Judit Cerdà Izquierdo, Ibis Emmanuel Valencia
* @version	0.1
*
*****************************************************************************/
$llamar=new Captcha();
$llamar->captcha();


Class Captcha{
	
	
	/***********************************
	 * 
	 * Función principal que se encarga de reunir todas las partes para formar el captcha
	 * 
	 * 
	 ***********************************/
	public function captcha(){

	}
	
	
	
}


/******************
 * CREAR CADENA
 * 
 * crea los caracteres del captchar de forma aleatoria usando un bucle para rellenar la variable  $caracteres con los posibles 
 * caracteres a usar extrayendo 1 carácter de $caracteres entre el rango 0 a Numero de letras que tiene la cadena y se introduces en $cadena
 * 
 * @var $caracteres posibles caracteres a usar
 * @var $numerodeletras numero de letras para generar el texto
 * @var $cadena variable para almacenar la cadena generada
 *****************/
$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; 
$numerodeletras=8; 
$cadena = ""; 

for($i=0;$i<$numerodeletras;$i++)
{   
	$cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
	
}

/*******************
 * CREAR COOKIE
 * 
 * guarda la $cadena creada anteriormente en una variable $aleatori y a continuación crea una cookie llamada captcha de valor $aleatorio que se caduca en
 * un año y se puede utilizar en todo el dominio de localhost, para poder acceder a su valor des de un javascript y poder validar el captcha.
 * 
 * @var  $aleatorio guardara la cadena
 * @var  $cadena variable anterior
 **************/
$aleatorio=$cadena;
setcookie("captcha", $aleatorio, time() + (86400 * 30),"/");


/************************************
 *  DAR FORMA DE IMAGEN
 *  
 *  En esta función se juntan las diferentes partes que formaran una imagen captcha
 * 
 * @var $captcha fondo de la imagen a crear
 * @var $colText color que debe tener el texto encima de la imagen creada
 * @var  $aleatorio guardará la cadena
 */
$captcha = imagecreatefromgif("../style/imagenes/bgcaptcha.gif");
$colText = imagecolorallocate($captcha, 0, 0, 0);
imagestring($captcha, 5, 16, 7, $aleatorio , $colText);
header("Content-type: image/gif");
imagegif($captcha);


?>
