
window.onload=inici;



function inici(){
	

comprobar();


}



function comprobar(){
	

if(window.XMLHttpRequest) {

    peticion_http = new XMLHttpRequest();

  }

  else if(window.ActiveXObject) {

    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");

  }



 peticion_http.onreadystatechange = obtenerRespuesta;



  peticion_http.open('GET', "../ajax/cargarDatos.php", true);

  peticion_http.send(null);



 





}



function obtenerRespuesta(){

	if(peticion_http.readyState == 4) {

	      if(peticion_http.status == 200) {

	    
	    	 document.getElementById("datos").innerHTML=peticion_http.responseText;
  		

		}

	}

}





