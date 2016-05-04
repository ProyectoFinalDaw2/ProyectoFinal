var validar=false;

window.onload=inici;



function inici(){
		
document.getElementById('administrar').onclick = administrar;
document.getElementById('noticia').onclick = subirNoticia;


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

function subirNoticia(){
	
	var input;
	var text;
	
	if (document.getElementById("usuarios")!= null){
		borrado = document.getElementById("usuarios");
		borrado.remove();
	}
	
	 var contenido=document.getElementById("contenido");
	
	 var form=document.createElement("form");
	 form.setAttribute("action","../controller/subirNoticia.php");
	 form.setAttribute("method","post");
	 form.setAttribute("id","form");
	 form.setAttribute("onsubmit","return validateMyForm();");
	 
	 	text=document.createTextNode("Titulo");				
	 	form.appendChild(text);
		
		input=document.createElement("input");
 		input.setAttribute("type","text");
 		input.setAttribute("name","titulo");
 		input.setAttribute("id","titulo");
 		input.setAttribute("class","form-control");
 	form.appendChild(input);
 	
 	text=document.createTextNode("Breve Descripción");				
 	form.appendChild(text);
	
	input=document.createElement("textarea");
		input.setAttribute("name","descripcion");
		input.setAttribute("id","descripcion");
		input.setAttribute("class","form-control");
		input.setAttribute("rows","3");
	form.appendChild(input);
	
	text=document.createTextNode("Noticia");				
 	form.appendChild(text);
	
	input=document.createElement("textarea");
		input.setAttribute("name","noticia");
		input.setAttribute("id","noticiasubida");
		input.setAttribute("class","form-control");
		input.setAttribute("rows","7");
	form.appendChild(input);

			var f = new Date();
			var fecha=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
			input=document.createElement("input");
			input.setAttribute("type","hidden");
			input.setAttribute("name","fecha");
			input.setAttribute("id","fecha");
			input.setAttribute("value",fecha);
		form.appendChild(input);
	
		text=document.createTextNode("Imagen");				
	 	form.appendChild(text);
	 	
		 	input=document.createElement("input");
	 		input.setAttribute("type","file");
	 		input.setAttribute("name","foto");
	 		input.setAttribute("id","foto");
	 		input.setAttribute("class","form-control");
	 	form.appendChild(input);
	 	
	 	text=document.createTextNode("Video");				
	 	form.appendChild(text);
		 	input=document.createElement("input");
	 		input.setAttribute("type","file");
	 		input.setAttribute("name","video");
	 		input.setAttribute("id","video");
	 		input.setAttribute("class","form-control");
	 	form.appendChild(input);
	 	
	 		input=document.createElement("input");
	 		input.setAttribute("type","submit");
	 		input.setAttribute("class","btn btn-default");
	 		input.setAttribute("value","Enviar");
	 		input.setAttribute("id","Enviar");
	 	form.appendChild(input);
		
	 contenido.appendChild(form);
	 
	 eventos();
	
}

function eventos(){

	blur("titulo");
	blur("descripcion");
	blur("noticiasubida");
}

function validateMyForm(){
	
	if (validar==true){
		return true;
	}else{
		return false;
	}
	
}

function blur(id){
	
	var variable;
	var borrado;
	
	variable=document.getElementById(id);
	variable.addEventListener("blur",function() {
	
		
		if (variable.value!=""){
			variable.style.borderColor = "green";
 			variable.style.borderWidth = "2px";
			validar=true;
			if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
				
			
			
		}else{
			if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
				div=document.createElement("div");
 				text=document.createTextNode("Este campo no se puede dejar en blanco");				
 				div.appendChild(text);
 				div.setAttribute("id","borrado");
 				insertAfter(variable,div);
 				variable.style.borderColor = "red";
 				variable.style.borderWidth = "2px";
			validar=false;
		}
			
				
	});
	
}

function insertAfter(e,i){ 
    if(e.nextSibling){ 
        e.parentNode.insertBefore(i,e.nextSibling); 
    } else { 
        e.parentNode.appendChild(i); 
    }
}