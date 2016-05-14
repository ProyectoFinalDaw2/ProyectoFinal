<?php
	require_once '../db/db_connect.php';
	/*
	
	
	mysql_query("insert into version (version) values('$version')");
	mysql_query("insert into mangas (nombre,tipo,fecha,manga) values('$nom','$tipo','2016/05/16',$manga')");
	header("Location: subirmanga.php");
	
    /*/
	
	
	session_start();
	$nom=$_REQUEST["txtnom"];
	$tipo=$_REQUEST["tipo"];
	$manga=$_REQUEST["manga"];
	#limpiamos los espacios en blanco y los cambios por guiones para que no exista error al llamarlos y también lo convertimos a mínuscula.
	$manga= strtolower(str_replace(' ', '-',$manga));
	$version=$_REQUEST["version"];
    #limpiamos los posibles espacios en blanco y se juntan las palabras, letras. También volvemos las letras a minisculas.
	$version = strtolower(str_replace(' ', '', $version));
	#añadimos version a la nueva carpeta
	$carpetaversion="$version/";
	# definimos la carpeta destino
    $carpetaDestino="$manga/"; #carpeta que tendrá el nombre del manga.
	
	#insertamos los datos en la base de datos.
						$con = new Connect();
						$con->connection($con);
						$sql = "INSERT INTO sube (link) VALUES ($carpetaDestino.$carpetaversion); ";
						$resultat = mysqli_query($con, $sql);
						
						
	# si hay algun archivo que subir
    if($_FILES["archivo"]["name"][0])
    {
         # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
		   # si es un formato de imagen
            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png")
            {
			#si es version  se crea una subcarpeta
			 if($version != null){
				 #primero se crea la carpeta destino antes de crear la carpeta version.
			   @mkdir($carpetaDestino);
				# si exsite la carpeta o se ha creado
                if( file_exists($carpetaDestino.$carpetaversion)|| @mkdir($carpetaDestino.$carpetaversion,true))
                {					
						    $origen=$_FILES["archivo"]["tmp_name"][$i];
							$destino=$carpetaDestino.$carpetaversion.$_FILES["archivo"]["name"][$i];
		 					# movemos el archivo
							if(@move_uploaded_file($origen, $destino))
							{
								echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
							}else{
								echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
							}
				}else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
		
			 }else{#si no es version
				# si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
			 }#hasta aqui la creacion de la carpeta  de img
				
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg";
            }
        }
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }
?>