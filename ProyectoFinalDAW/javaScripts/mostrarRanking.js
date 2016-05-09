


function semanal(){
	
	peticion_http3=inicializa_xhr();

	peticion_http3.onreadystatechange = obtenerRespuesta3;



	peticion_http3.open('GET', "../ajax/mostrarRankingSemanal.php", true);

	peticion_http3.send(null);
	
}




function obtenerRespuesta3(){

	if(peticion_http3.readyState == 4) {

	      if(peticion_http3.status == 200) {

	    	 
	    	 document.getElementById("ranking").innerHTML=peticion_http3.responseText;
		

		}

	}

}

function global(){
	
	peticion_http4=inicializa_xhr();

	peticion_http4.onreadystatechange = obtenerRespuesta4;



	peticion_http4.open('GET', "../ajax/mostrarRankingGlobal.php", true);

	peticion_http4.send(null);
	
}



function obtenerRespuesta4(){

	if(peticion_http4.readyState == 4) {

	      if(peticion_http4.status == 200) {

	    	 
	    	 document.getElementById("ranking").innerHTML=peticion_http4.responseText;
		

		}

	}

}
function noticiaMasDestacada(){
	
	peticion_http5=inicializa_xhr();
	
	peticion_http5.onreadystatechange = obtenerRespuesta5;



	peticion_http5.open('GET', "../ajax/mostrarNoticiaMasDestacada.php", true);

	peticion_http5.send(null);
}

function obtenerRespuesta5(){

	if(peticion_http5.readyState == 4) {

	      if(peticion_http5.status == 200) {

	    	 
	    	 document.getElementById("destacada").innerHTML=peticion_http5.responseText;
		

		}

	}

}