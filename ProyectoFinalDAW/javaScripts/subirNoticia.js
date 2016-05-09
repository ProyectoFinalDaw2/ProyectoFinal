var validar=false;


	


function subirNoticia(){


var input;
var text;

if (document.getElementById("formulario")!= null){
	borrado = document.getElementById("formulario");
	borrado.remove();
}

 var contenido=document.getElementById("contenido");

 var div=document.createElement("div");
 div.setAttribute("id","formulario");
 
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
			 form.setAttribute("enctype","multipart/form-data");
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
	 		input.setAttribute("accept","image/*");
	 		input.setAttribute("class","form-control");
	 	form.appendChild(input);
	 	
	 	text=document.createTextNode("Video");				
	 	form.appendChild(text);
		 	input=document.createElement("input");
	 		input.setAttribute("type","file");
	 		input.setAttribute("name","video");
	 		input.setAttribute("id","video");
	 		input.setAttribute("accept","video/*");
	 		input.setAttribute("class","form-control");
	 	form.appendChild(input);
	 	
	 		input=document.createElement("input");
	 		input.setAttribute("type","submit");
	 		input.setAttribute("class","btn btn-default");
	 		input.setAttribute("value","Enviar");
	 		input.setAttribute("id","Enviar");
	 	form.appendChild(input);
	
  div.appendChild(form);	 	
 contenido.appendChild(div);
 
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


function validateMyForm(){
	
	if (validar==true){
		return true;
	}else{
		return false;
	}
	
}
