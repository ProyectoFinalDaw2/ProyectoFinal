window.onload=inici;



function inici(){
		
document.getElementById("cookies").onclick=desaparecer;
comprobar();
comprobar2();
noticiaMasDestacada();

}

function inicializa_xhr() {   //aquesta funció crea un objecte de tipus AJAX
	  if (window.XMLHttpRequest) {
	    return new XMLHttpRequest(); 
	  } else if (window.ActiveXObject) {
	    return new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 
}


function comprobar(){
	


	peticion_http=inicializa_xhr();

	peticion_http.onreadystatechange = obtenerRespuesta;

	peticion_http.open('GET', "ajax/controll.php", true);
	peticion_http.send(null);



}


function obtenerRespuesta(){ 
	
	if(peticion_http.readyState == 4) { 
	      if(peticion_http.status == 200) {

	    	

		}

	}

}

function desaparecer(){
	document.getElementById("cookies").remove();
}



function noticiaMasDestacada(){
	
	
	
	peticion_http1=inicializa_xhr();
	
	peticion_http1.onreadystatechange = obtenerRespuesta1;



	peticion_http1.open('GET', "ajax/mostrarNoticiasMasDestacadasIndex.php", true);

	peticion_http1.send(null);
}

function obtenerRespuesta1(){

	if(peticion_http1.readyState == 4) {

	      if(peticion_http1.status == 200) {

	    	 
	    	 document.getElementById("destacada").innerHTML=peticion_http1.responseText;
		

		}

	}

}

function comprobar2(){
	

	  peticion_http2=inicializa_xhr();

	  peticion_http2.onreadystatechange = obtenerRespuesta2;



	  peticion_http2.open('GET', "ajax/mostrarUltimasNoticiasIndex.php", true);

	  peticion_http2.send(null);
	  
	  

	}



	function obtenerRespuesta2(){

		if(peticion_http2.readyState == 4) {

		      if(peticion_http2.status == 200) {

		    
		    	 document.getElementById("ultimasNoticias").innerHTML=peticion_http2.responseText;
	  		

			}

		}

	}
