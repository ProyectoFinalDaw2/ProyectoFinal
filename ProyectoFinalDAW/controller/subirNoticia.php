<?php
print_r($_REQUEST);

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$noticia = $_POST['noticia'];
$fecha = $_POST['fecha'];

$imagen=$_FILES['foto']['name'];
$imagen2=$_FILES['foto']['tmp_name'];
$img_type = $_FILES['foto']['type'];


/*$video=$_FILES['video']['name'];
$video2=$_FILES['video']['tmp_name'];
$video_type = $_FILES['video']['type'];*/


?>