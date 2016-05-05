var div;
var text;
var borrado;
var validar=false;
var validar_contrasenya=false;

window.onload=inici;



function inici(){
		
document.getElementById('cambio').onclick = cambio;
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



  peticion_http.open('GET', "../ajax/cargarDatos.php", true);

  peticion_http.send(null);
  
  
  
  peticion_http2=inicializa_xhr();

  peticion_http2.onreadystatechange = obtenerRespuesta2;



  peticion_http2.open('GET', "../ajax/imagenUsuario.php", true);

  peticion_http2.send(null);



 





}



function obtenerRespuesta(){

	if(peticion_http.readyState == 4) {

	      if(peticion_http.status == 200) {

	    
	    	 document.getElementById("datos").innerHTML=peticion_http.responseText;
  		

		}

	}

}

function obtenerRespuesta2(){

	if(peticion_http2.readyState == 4) {

	      if(peticion_http2.status == 200) {

	    
	    	
	    	  var div=document.getElementById("imangen");
	    	  var img=document.createElement("img");
	    	  img.src=peticion_http2.responseText;
	    	  img.setAttribute("class","img-rounded");
	    	  img.setAttribute("id","imagenUsuario");
	    	  div.appendChild(img);
  		

		}

	}

}

function cambio(){
	if (document.getElementById("form")!= null){
		borrado = document.getElementById("form");
		borrado.remove();
	}
	 var div=document.getElementById("cambioAqui");
		 var form=document.createElement("form");
		 form.setAttribute("action","../controller/cambiarDatos.php");
		 form.setAttribute("method","post");
		 form.setAttribute("id","form");
		 form.setAttribute("enctype","multipart/form-data");
		 form.setAttribute("onsubmit","return validateMyForm();");
	 	 	var select=document.createElement("select");
	 	 	select.setAttribute("id","campo");
	 	 	select.setAttribute("class","form-control");
	 	 	select.setAttribute("name","campo");
	 	 	select.setAttribute("onChange","cargarCampos();");
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","nada");
	 	 		var text=document.createTextNode("--Seleciona--");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
 	 	
	 	 		var option=document.createElement("option");
	 	 		option.setAttribute("value","nick");
	 	 		var text=document.createTextNode("Nick");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","correo");
	 	 		var text=document.createTextNode("Email");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","nombre");
	 	 		var text=document.createTextNode("Nombre");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","apellidos");
	 	 		var text=document.createTextNode("Apellidos");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","contrasenya");
	 	 		var text=document.createTextNode("Contraseña");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","fechaNacimiento");
	 	 		var text=document.createTextNode("Fecha de Nacimiento");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","sexo");
	 	 		var text=document.createTextNode("Sexo");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","telefon");
	 	 		var text=document.createTextNode("Telefono");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);
	 	 	
		 	 	var option=document.createElement("option");
	 	 		option.setAttribute("value","imagen");
	 	 		var text=document.createTextNode("Imagen");
	 	 		option.appendChild(text);
	 	 		
	 	 	select.appendChild(option);

	 	 form.appendChild(select);
	 div.appendChild(form);
}

function cargarCampos(){

	if (document.getElementById("borrado")!= null){
		borrado = document.getElementById("borrado");
		borrado.remove();
	}
	
	if (document.getElementById("Enviar")!= null){
		borrado = document.getElementById("Enviar");
		borrado.remove();
		
	}
	
	if (document.getElementById("variable")!= null){
		borrado = document.getElementById("variable");
		borrado.remove();
		
	}
	
	if (document.getElementById("contrasenyaVella")!= null){
		borrado = document.getElementById("contrasenyaVella");
		borrado.remove();
		
	}
	
	if (document.getElementById("borrado1")!= null){
		borrado = document.getElementById("borrado1");
		borrado.remove();
		
	}
	
	if (document.getElementById("borrado2")!= null){
		borrado = document.getElementById("borrado2");
		borrado.remove();
		
	}
	
	if (document.getElementById("borrado3")!= null){
		borrado = document.getElementById("borrado2");
		borrado.remove();
		
	}

	/*************************************************************
	 * NICK
	 **************************************************************/
	
	if (document.getElementById("campo").value=="nick"){
		
		var form=document.getElementById("form");
		 	var input=document.createElement("input");
	 		input.setAttribute("type","text");
	 		input.setAttribute("name","variable");
	 		input.setAttribute("id","variable");
	 		input.setAttribute("class","form-control");
	 	form.appendChild(input);
	 	
	 	var input=document.createElement("input");
	 		input.setAttribute("type","submit");
	 		input.setAttribute("class","btn btn-default");
	 		input.setAttribute("value","Enviar");
	 		input.setAttribute("id","Enviar");
	 		form.appendChild(input);
	 		
	 		var variable=document.getElementById("variable");

	 		variable.addEventListener("blur",function() {
	 			
	 			if (variable.value!=""){	

	 				peticion_http3=inicializa_xhr();

	 				peticion_http3.onreadystatechange = obtenerRespuesta3;

	 				peticion_http3.open("POST", "../ajax/comprueva_nick.php", true);

	 			    peticion_http3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	 				
	 				var aut=variable.value;
	 				peticion_http3.send("autor=" + aut);

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
	 		
	 		/*************************************************************
	 		 * EMAIL
	 		 **************************************************************/
	 		
	     	if (document.getElementById("campo").value=="correo"){
	 			
	 			var form=document.getElementById("form");
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","text");
	 		 		input.setAttribute("name","variable");
	 		 		input.setAttribute("id","variable");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);
	 		 		
	 		 		var variable=document.getElementById("variable");

	 		 		variable.addEventListener("blur",function() {
	 		 			
	 		 			if (variable.value!=""){	

	 		 				var expressio= new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
	 		 				if (expressio.test(variable.value)==true){
	 		 					
	 		 					peticion_http4=inicializa_xhr();

	 		 					peticion_http4.onreadystatechange = obtenerRespuesta4;

	 		 					peticion_http4.open("POST", "../ajax/comprueva_correo.php", true);

	 		 				    peticion_http4.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	 		 					
	 		 					var aut=variable.value;
	 		 					peticion_http4.send("correo=" + aut);
	 		 					
	 		 				}else{
	 		 					if (document.getElementById("borrado")!= null){
	 		 						borrado = document.getElementById("borrado");
	 		 						borrado.remove();
	 		 					}
	 		 					div=document.createElement("div");
	 		 					text=document.createTextNode("Lo que has puesto no corresponde a una direccion de correo electronico");				
	 		 					div.appendChild(text);
	 		 					div.setAttribute("id","borrado");
	 		 					insertAfter(variable,div);
	 		 					variable.style.borderColor = "red";
	 		 					variable.style.borderWidth = "2px";
	 		 				    validar=false;
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
	 		
	 		/*************************************************************
	 		 * Nombre
	 		 **************************************************************/
	 		
	 		if (document.getElementById("campo").value=="nombre"){
	 			
	 			var form=document.getElementById("form");
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","text");
	 		 		input.setAttribute("name","variable");
	 		 		input.setAttribute("id","variable");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);
	 		 		
	 		 		var variable=document.getElementById("variable");
	 		 		variable.addEventListener("blur",function() {
	 		 		
	 		 			if (variable.value!=""){
	 		 				var expressio= new RegExp(/^[A-Z | a-z]+(?!\d)$/);
	 		 				if (expressio.test(variable.value)==true){
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
	 		 					text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras sin espacio u otros caracteres");				
	 		 					div.appendChild(text);
	 		 					div.setAttribute("id","borrado");
	 		 					insertAfter(variable,div);
	 		 					variable.style.borderColor = "red";
	 		 					variable.style.borderWidth = "2px";
	 		 					validar=false;
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
	 		
	 		/*************************************************************
	 		 * APELLIDOS
	 		 **************************************************************/
	 		
	 		if (document.getElementById("campo").value=="apellidos"){
	 			
	 			var form=document.getElementById("form");
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","text");
	 		 		input.setAttribute("name","variable");
	 		 		input.setAttribute("id","variable");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);
	 		 		
	 		 		var variable=document.getElementById("variable");
	 		 		variable.addEventListener("blur",function() {
	 		 		
	 		 			if (variable.value!=""){
	 		 				var expressio= new RegExp(/(^[A-Z | a-z]+(?!\d))\s([A-Z | a-z]+(?!\d)$)/);
	 		 				if (expressio.test(variable.value)==true){
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
	 		 					text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras con espacio con otra serie de letras sin otros caracteres");				
	 		 					div.appendChild(text);
	 		 					div.setAttribute("id","borrado");
	 		 					insertAfter(variable,div);
	 		 					variable.style.borderColor = "red";
	 		 					variable.style.borderWidth = "2px";
		 		 				validar=false;
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
	 		
	 		/*************************************************************
	 		 * CONTRASEÑA
	 		 **************************************************************/
	 		
	 		if (document.getElementById("campo").value=="contrasenya"){
	 			
	 			var form=document.getElementById("form");
		 			div=document.createElement("div");
	 				text=document.createTextNode("Contraseña Actual");				
	 				div.appendChild(text);
	 				div.setAttribute("id","borrado1");
	 			form.appendChild(div);
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","password");
	 		 		input.setAttribute("name","contrasenyaVella");
	 		 		input.setAttribute("id","contrasenyaVella");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	div=document.createElement("div");
 				text=document.createTextNode("Contraseña Nueva");				
 				div.appendChild(text);
 				div.setAttribute("id","borrado2");
 			form.appendChild(div);
		 		 	var form=document.getElementById("form");
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","password");
	 		 		input.setAttribute("name","variable");
	 		 		input.setAttribute("id","variable");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);
	 		 		
	 		 		var contrasenyaVella=document.getElementById("contrasenyaVella");
	 		 		contrasenyaVella.addEventListener("blur",function() {
	 		 		
	 		 			if (contrasenyaVella.value!=""){
	 		 				var expressio= new RegExp(/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/);
	 		 				if (expressio.test(contrasenyaVella.value)==true){
	 		 					peticion_http5=inicializa_xhr();

	 		 					peticion_http5.onreadystatechange = obtenerRespuesta5;

	 		 					peticion_http5.open("POST", "../ajax/comprueva_contrasenya.php", true);

	 		 				    peticion_http5.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	 		 					
	 		 					var aut=contrasenyaVella.value;
	 		 					peticion_http5.send("contrasenya=" + aut);
	 		 				}else{
	 		 					if (document.getElementById("borrado")!= null){
	 		 						borrado = document.getElementById("borrado");
	 		 						borrado.remove();
	 		 					}
	 		 					div=document.createElement("div");
	 		 					text=document.createTextNode("Como mínimo tiene que tener 8 caracteres, contener una mayuscula, minuscula i caracter especial");				
	 		 					div.appendChild(text);
	 		 					div.setAttribute("id","borrado");
	 		 					insertAfter(contrasenyaVella,div);
	 		 					contrasenyaVella.style.borderColor = "red";
	 		 					contrasenyaVella.style.borderWidth = "2px";
	 		 					validar=false;
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
	 		 				insertAfter(contrasenyaVella,div);
	 		 				contrasenyaVella.style.borderColor = "red";
	 		 				contrasenyaVella.style.borderWidth = "2px";
	 		 				validar=false;
	 		 			}
	 		 				
	 		 					
	 		 		});
	 		 		
	 		 		var variable=document.getElementById("variable");
	 		 		variable.addEventListener("blur",function() {
	 		 		
	 		 			if (variable.value!=""){
	 		 				var expressio= new RegExp(/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/);
	 		 				if (expressio.test(variable.value)==true){
	 		 					variable.style.borderColor = "green";
	 		 					variable.style.borderWidth = "2px";
	 		 					if (document.getElementById("borrado3")!= null){
	 		 						borrado = document.getElementById("borrado3");
	 		 						borrado.remove();
	 		 					}
 		 					
	 		 					if (validar_contrasenya==true){
	 		 						validar=true;
	 		 					}else{
	 		 						div=document.createElement("div");
		 		 					text=document.createTextNode("La contrasenya Actual no es correcta");				
		 		 					div.appendChild(text);
		 		 					div.setAttribute("id","borrado3");
		 		 					insertAfter(variable,div);
		 		 					variable.style.borderColor = "red";
		 		 					variable.style.borderWidth = "2px";
		 		 					validar=false;
	 		 					}
	 		 						
	 		 				}else{
	 		 					if (document.getElementById("borrado3")!= null){
	 		 						borrado = document.getElementById("borrado3");
	 		 						borrado.remove();
	 		 					}
	 		 					div=document.createElement("div");
	 		 					text=document.createTextNode("Como mínimo tiene que tener 8 caracteres, contener una mayuscula, minuscula i caracter especial");				
	 		 					div.appendChild(text);
	 		 					div.setAttribute("id","borrado3");
	 		 					insertAfter(variable,div);
	 		 					variable.style.borderColor = "red";
	 		 					variable.style.borderWidth = "2px";
	 		 					validar=false;
	 		 				}
	 		 				
	 		 			}else{
	 		 				if (document.getElementById("borrado3")!= null){
 		 						borrado = document.getElementById("borrado3");
 		 						borrado.remove();
 		 					}
	 		 				div=document.createElement("div");
	 		 				text=document.createTextNode("Este campo no se puede dejar en blanco");				
	 		 				div.appendChild(text);
	 		 				div.setAttribute("id","borrado3");
	 		 				insertAfter(variable,div);
	 		 				variable.style.borderColor = "red";
	 		 				variable.style.borderWidth = "2px";
	 		 				validar=false;
	 		 			}
	 		 				
	 		 					
	 		 		});
	 		 		
	 			}
	 		
	 		/*************************************************************
	 		 * FECHA DE NACIMIENTO
	 		 **************************************************************/
	 		
	 		if (document.getElementById("campo").value=="fechaNacimiento"){
	 			
	 			var form=document.getElementById("form");
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","date");
	 		 		input.setAttribute("name","variable");
	 		 		input.setAttribute("id","variable");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);
	 		 		
	 		 		var variable=document.getElementById("variable");
	 		 		variable.addEventListener("blur",function() {
	 		 		
	 		 			if (variable.value!=""){
	 		 				
	 		 				var expressio= new RegExp(/^.{10}$/);
	 		 				if (expressio.test(variable.value)==true){
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
	 		 					text=document.createTextNode("El año que has puesto no existe");				
	 		 					div.appendChild(text);
	 		 					div.setAttribute("id","borrado");
	 		 					insertAfter(variable,div);
	 		 					variable.style.borderColor = "red";
		 		 				variable.style.borderWidth = "2px";
	 		 					validar=false;
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
	 		
	 		/*************************************************************
	 		 * SEXO
	 		 **************************************************************/
	 		
	 		if (document.getElementById("campo").value=="sexo"){
	 			
	 			validar=true;
	 			
	 			var form=document.getElementById("form");
	 			var select=document.createElement("select");
		 	 	select.setAttribute("id","variable");
		 	 	select.setAttribute("class","form-control");
		 	 	select.setAttribute("name","variable");
		 	 	
			 	 	var option=document.createElement("option");
		 	 		option.setAttribute("value","noseespecifica");
		 	 		var text=document.createTextNode("No se especifica");
		 	 		option.appendChild(text);
		 	 	select.appendChild(option);	
		 	 		var option=document.createElement("option");
		 	 		option.setAttribute("value","mujer");
		 	 		var text=document.createTextNode("Mujer");
		 	 		option.appendChild(text);
		 	 	select.appendChild(option);	
		 	 		var option=document.createElement("option");
		 	 		option.setAttribute("value","hombre");
		 	 		var text=document.createTextNode("Hombre");
		 	 		option.appendChild(text);
		 	 		
		 	 	select.appendChild(option);
	 		 	form.appendChild(select);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);

	 		 		
	 		 		
	 			}
	 		
	 		/*************************************************************
	 		 * Numero
	 		 **************************************************************/
	 		
	 		if (document.getElementById("campo").value=="telefon"){
	 			
	 			var form=document.getElementById("form");
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","number");
	 		 		input.setAttribute("name","variable");
	 		 		input.setAttribute("id","variable");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);
	 		 		
	 		 		var variable=document.getElementById("variable");
	 		 		variable.addEventListener("blur",function() {
	 		 		
	 		 			if (variable.value!=""){
	 		 				
	 		 				var expressio= new RegExp(/^\d{9}$/);
	 		 				if (expressio.test(variable.value)==true){
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
	 		 					text=document.createTextNode("El numero tiene que tener 9 digitos y no contener caracteres");				
	 		 					div.appendChild(text);
	 		 					div.setAttribute("id","borrado");
	 		 					insertAfter(variable,div);
	 		 					variable.style.borderColor = "red";
		 		 				variable.style.borderWidth = "2px";
	 		 					validar=false;
	 		 				
	 		 					
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
	 		
	 		/*************************************************************
	 		 * Imagen
	 		 **************************************************************/
	 		
	 		if (document.getElementById("campo").value=="imagen"){
	 			
	 			validar=true;
	 			
	 			var form=document.getElementById("form");
	 			 	var input=document.createElement("input");
	 		 		input.setAttribute("type","file");
	 		 		input.setAttribute("name","foto");
	 		 		input.setAttribute("id","fileOK");
	 		 		input.setAttribute("class","form-control");
	 		 	form.appendChild(input);
	 		 	
	 		 	var input=document.createElement("input");
	 		 		input.setAttribute("type","submit");
	 		 		input.setAttribute("class","btn btn-default");
	 		 		input.setAttribute("value","Enviar");
	 		 		input.setAttribute("id","Enviar");
	 		 		form.appendChild(input);
	 		 		
	 		 		var variable=document.getElementById("fileOK");
	 		 		variable.addEventListener("blur",function() {
	 		 	
	 		 			if (variable.value!=""){

	 		 				validar=true;
	 		 			}else{

	 		 				validar=false;
	 		 			}
	 		 				
	 		 					
	 		 		});
	 		}
}

function validateMyForm(){
	
	if (validar==true){
		return true;
	}else{
		return false;
	}
	
}

function obtenerRespuesta3(){
	
	if(peticion_http3.readyState == 4) {
	      if(peticion_http3.status == 200) {
	    	  
	    	  
	    	  
	    	 var variable=document.getElementById("variable");
	    	
	    	 var buscadorNick=peticion_http3.responseText; 
			
	    	if (buscadorNick!="si"){
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
	    		
	    		variable.style.borderColor = "green";
	    		variable.style.borderWidth = "2px";
				validar=true;
				
				
		
	    	}else{
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
				div=document.createElement("div");
				text=document.createTextNode("Este Nick ya esta registrado en nustra base de datos");				
				div.appendChild(text);
				div.setAttribute("id","borrado");
				insertAfter(variable,div);
				variable.style.borderColor = "red";
				variable.style.borderWidth = "2px";
				validar=false;
				
			}
	    	
	    	
	    	
	      }
	}
}

function insertAfter(e,i){ 
    if(e.nextSibling){ 
        e.parentNode.insertBefore(i,e.nextSibling); 
    } else { 
        e.parentNode.appendChild(i); 
    }
}

function obtenerRespuesta4(){
	
	if(peticion_http4.readyState == 4) {
	      if(peticion_http4.status == 200) {
	    	  
	    	
	    	 var variable=document.getElementById("variable");
	    	
	    	 var buscadorCorreo=peticion_http4.responseText; 
			
	    	if (buscadorCorreo!="si"){
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
	    		
	    		variable.style.borderColor = "green";
	    		variable.style.borderWidth = "2px";
				validar=true;
				
				
		
	    	}else{
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
				div=document.createElement("div");
				text=document.createTextNode("Este Correo ya esta registrado en nustra base de datos");				
				div.appendChild(text);
				div.setAttribute("id","borrado");
				insertAfter(variable,div);
				variable.style.borderColor = "red";
				variable.style.borderWidth = "2px";
				validar=false;
				
			}
	    	
	    	
	    	
	      }
	}
}

function obtenerRespuesta5(){
	
	if(peticion_http5.readyState == 4) {
	      if(peticion_http5.status == 200) {
	    	  
	    	
	    	  
	    	 var contrasenyaVella=document.getElementById("contrasenyaVella");
	    	
	    	 var buscadorContrasenyaVella=peticion_http5.responseText; 
			
	    	if (buscadorContrasenyaVella=="si"){
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
	    		
	    		contrasenyaVella.style.borderColor = "green";
	    		contrasenyaVella.style.borderWidth = "2px";
	    		validar_contrasenya=true;
				
				
		
	    	}else{
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
				div=document.createElement("div");
				text=document.createTextNode("Esta contrasenya no corresponde con la actual");				
				div.appendChild(text);
				div.setAttribute("id","borrado");
				insertAfter(contrasenyaVella,div);
				contrasenyaVella.style.borderColor = "red";
				contrasenyaVella.style.borderWidth = "2px";
				validar=false;
				
			}
	    	
	    	
	    	
	      }
	}
}
