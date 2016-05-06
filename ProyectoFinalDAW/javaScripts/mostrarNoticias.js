
window.onload=inici;



function inici(){
		
//document.getElementById('cambio').onclick = cambio;
comprobar();

}

function inicializa_xhr() {  //aquesta funció crea un objecte de tipus AJAX
	  if (window.XMLHttpRequest) {
	    return new XMLHttpRequest(); 
	  } else if (window.ActiveXObject) {
	    return new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 
}


function comprobar(){
	

  peticion_http=inicializa_xhr();

  peticion_http.onreadystatechange = obtenerRespuesta;



  peticion_http.open('GET', "../ajax/mostrarUltimasNoticias.php", true);

  peticion_http.send(null);
  
  
  
  peticion_http2=inicializa_xhr();

  peticion_http2.onreadystatechange = obtenerRespuesta2;



  peticion_http2.open('GET', "../ajax/cargarTodasNoticias.php", true);

  peticion_http2.send(null);
  
  


}



function obtenerRespuesta(){

	if(peticion_http.readyState == 4) {

	      if(peticion_http.status == 200) {

	    
	    	 document.getElementById("ultimasNoticias").innerHTML=peticion_http.responseText;
  		

		}

	}

}

function obtenerRespuesta2(){

	if(peticion_http2.readyState == 4) {

	      if(peticion_http2.status == 200) {

	    
	    	 document.getElementById("cargarTodasNoticias").innerHTML=peticion_http2.responseText;
  		

		}

	}

}