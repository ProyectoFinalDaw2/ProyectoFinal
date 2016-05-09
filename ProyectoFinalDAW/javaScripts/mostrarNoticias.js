var num=0;

window.onload=inici;



function inici(){

document.getElementById('noticia').onclick = subirNoticia;
comprobar();
semanal();
noticiaMasDestacada();
document.getElementById('semanal').onclick = semanal;
document.getElementById('global').onclick = global;



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



  peticion_http2.open('POST', "../ajax/cargarTodasNoticias.php", true);

  peticion_http2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	
	
  peticion_http2.send("num=" + num);
  
  


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
	    		
	    	
	    	
	    	if (document.getElementById('next')!=null){
	    		
	    		document.getElementById('next').onclick = next;
	    	}
	    	
	    	if (document.getElementById('previus')!=null){
	    		document.getElementById('previus').onclick = previuss;
	    	}
	    		
	    	
		}

	}

}

function previuss(){
	
	 
	  num=document.getElementById('previus').value;
	  comprobar();
	  

}

function next(){
	
	
	  num=document.getElementById('next').value;
	  comprobar();


}

