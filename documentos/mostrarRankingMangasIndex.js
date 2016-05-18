/***************************
 *mostrarRankingMagas.js
 * 
 * En este documento hace posible cargar los diferentes contadores globales
 * según desee el usuario
 * 
 *  Autos: Judit Cerdà Izquierdo y Emanuel Ibis Valencia
 *  Version: 0.1
 *  
 **************************/

/*
 * Funcion para llamar a los diferentes ajax
 */
function semanal(){
	
	peticion_http3=inicializa_xhr();

	peticion_http3.onreadystatechange = obtenerRespuesta3;



	peticion_http3.open('GET', "ajax/mostrarRankingSemanalMangas.php", true);

	peticion_http3.send(null);
	
}



/*
 * Funcion para obtener la respues de un php por ajax
 */
function obtenerRespuesta3(){

	if(peticion_http3.readyState == 4) {

	      if(peticion_http3.status == 200) {

	    	 
	    	 document.getElementById("ranking").innerHTML=peticion_http3.responseText;
		

		}

	}

}
/*
 * Funcion para llamar a un php por ajax
 */
function global(){
	
	peticion_http4=inicializa_xhr();

	peticion_http4.onreadystatechange = obtenerRespuesta4;



	peticion_http4.open('GET', "ajax/mostrarRankingGlobalMangas.php", true);

	peticion_http4.send(null);
	
}


/*
 * Funcion para  obtener la respues de un php por ajax
 */
function obtenerRespuesta4(){

	if(peticion_http4.readyState == 4) {

	      if(peticion_http4.status == 200) {

	    
	    	 document.getElementById("ranking").innerHTML=peticion_http4.responseText;
		

		}

	}

}