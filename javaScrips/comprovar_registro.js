var div;
var text;
var error;

function inici(){
	
	/**********************************************************************
	 * NICK
	 *******************************************************************/
	
	var nick=document.getElementById("nick");
	nick.addEventListener("blur",function() {
	
		if (nick.value!=""){			
				nick.style.borderColor="green";
				nick.style.borderWidth="2px";
				
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(nick,div);
			nick.style.borderWidth="2px";
			nick.style.borderColor="red";
			
		}
			
				
	});
	
	/**********************************************************************
	 * NOMBRE
	 *******************************************************************/
	
	var nombre=document.getElementById("nombre");
	nombre.addEventListener("blur",function() {
	
		if (nombre.value!=""){
			//Tiene que empezar y acabar con una letra de la a -z sin que haya ningun otro caracter
			var expressio= new RegExp(/^[A-Z | a-z]+(?!\d)$/);
			if (expressio.test(nombre.value)==true){
				nombre.style.borderColor="green";
				nombre.style.borderWidth="2px";
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras sin espacio u otros caracteres");				
				div.appendChild(text);
				insertAfter(nombre,div);
				nombre.style.borderWidth="2px";
				nombre.style.borderColor="red";
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(nombre,div);
			nombre.style.borderWidth="2px";
			nombre.style.borderColor="red";
			
		}
			
				
	});
	
	/**********************************************************************
	 * EMAIL
	 *******************************************************************/
	
	var correo=document.getElementById("correo");
	correo.addEventListener("blur",function() {

		if (correo.value!=""){
			//Tiene que empezar y acabar con una letra de la a -z sin que haya ningun otro caracter
			var expressio= new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
			if (expressio.test(correo.value)==true){
				correo.style.borderColor="green";
				correo.style.borderWidth="2px";
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no corresponde a una direccion de correo electronico");				
				div.appendChild(text);
				insertAfter(correo,div);
				correo.style.borderWidth="2px";
				correo.style.borderColor="red";
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(correo,div);
			correo.style.borderWidth="2px";
			correo.style.borderColor="red";
			
		}
			
				
	});
	

	/**********************************************************************
	 * APELLIDOS
	 *******************************************************************/
	
	var apellidos=document.getElementById("apellidos");
	apellidos.addEventListener("blur",function() {
	
		if (nombre.value!=""){
			//Tiene que empezar y acabar con una letra de la a - z con espacio en blanco y sin que haya ningun otro caracter
			var expressio= new RegExp(/(^[A-Z | a-z]+(?!\d))\s([A-Z | a-z]+(?!\d)$)/);
			if (expressio.test(nombre.value)==true){
				apellidos.style.borderColor="green";
				apellidos.style.borderWidth="2px";
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras con espacio con otra serie de letras sin otros caracteres");				
				div.appendChild(text);
				insertAfter(apellidos,div);
				apellidos.style.borderWidth="2px";
				apellidos.style.borderColor="red";
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(apellidos,div);
			apellidos.style.borderWidth="2px";
			apellidos.style.borderColor="red";
			
		}
			
				
	});
	
	/**********************************************************************
	 * CONTRASEÑA
	 *******************************************************************/
	
	var apellidos=document.getElementById("apellidos");
	apellidos.addEventListener("blur",function() {
	
		if (nombre.value!=""){
			//Tiene que empezar y acabar con una letra de la a - z con espacio en blanco y sin que haya ningun otro caracter
			var expressio= new RegExp(/([A-Z | a-z] | [\d]){8}/);
			if (expressio.test(nombre.value)==true){
				apellidos.style.borderColor="green";
				apellidos.style.borderWidth="2px";
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras con espacio con otra serie de letras sin otros caracteres");				
				div.appendChild(text);
				insertAfter(apellidos,div);
				apellidos.style.borderWidth="2px";
				apellidos.style.borderColor="red";
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(apellidos,div);
			apellidos.style.borderWidth="2px";
			apellidos.style.borderColor="red";
			
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