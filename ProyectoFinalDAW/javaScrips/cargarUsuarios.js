window.onload=inici;



function inici(){
		
document.getElementById('administrar').onclick = administrar;


}

function inicializa_xhr() {  //aquesta funció crea un objecte de tipus AJAX
	  if (window.XMLHttpRequest) {
	    return new XMLHttpRequest(); 
	  } else if (window.ActiveXObject) {
	    return new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 
}



function cargar(){
	

  peticion_http=inicializa_xhr();

  peticion_http.onreadystatechange = obtenerRespuesta;



  peticion_http.open('GET', "../ajax/cargarUsuarios.php", true);

  peticion_http.send(null);
  

}



function obtenerRespuesta(){

	if(peticion_http.readyState == 4) {

	      if(peticion_http.status == 200) {
	    	  
	    	 var contenido=document.getElementById("contenido");
	    	 var div=document.createElement("div");
	    	 div.setAttribute("id","usuarios");
	    	 contenido.appendChild(div);
	    
	    	 document.getElementById("usuarios").innerHTML=peticion_http.responseText;
  		

		}

	}

}


function administrar(){
	
	cargar();
}
