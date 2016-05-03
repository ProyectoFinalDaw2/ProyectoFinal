window.onload=inici;



function inici(){
		
document.getElementById("cookies").onclick=desaparecer;
comprobar();

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
