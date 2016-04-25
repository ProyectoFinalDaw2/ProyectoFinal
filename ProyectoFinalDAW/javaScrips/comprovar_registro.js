var div;
var text;

function sub(){
	var formulario = document.forms[1];
	formulario.submit();
	
}

function inici(){
	var submit=document.getElementById("submit");
	submit.addEventListener("click",function() {
		
		sub();
		
		
	});
	
	/**********************************************************************
	 * NICK
	 *******************************************************************/
	
	var nick=document.getElementById("nick");
	nick.addEventListener("blur",function() {
	
		if (nick.value!=""){			
				nick.setAttribute("id","validoGreen");
				
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(nick,div);
			nick.setAttribute("id","validoRojo");
			
		}
			
				
	});
	
	/**********************************************************************
	 * NOMBRE
	 *******************************************************************/
	
	var nombre=document.getElementById("nombre");
	nombre.addEventListener("blur",function() {
	
		if (nombre.value!=""){
			var expressio= new RegExp(/^[A-Z | a-z]+(?!\d)$/);
			if (expressio.test(nombre.value)==true){
				nombre.setAttribute("id","validoGreen");
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras sin espacio u otros caracteres");				
				div.appendChild(text);
				insertAfter(nombre,div);
				nombre.setAttribute("id","validoRojo");
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(nombre,div);
			nombre.setAttribute("id","validoRojo");
			
		}
			
				
	});
	
	/**********************************************************************
	 * EMAIL
	 *******************************************************************/
	
	var correo=document.getElementById("correo");
	correo.addEventListener("blur",function() {

		if (correo.value!=""){
			var expressio= new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
			if (expressio.test(correo.value)==true){
				correo.setAttribute("id","validoGreen");
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no corresponde a una direccion de correo electronico");				
				div.appendChild(text);
				insertAfter(correo,div);
				correo.setAttribute("id","validoRojo");
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(correo,div);
			correo.setAttribute("id","validoRojo");
			
		}
			
				
	});
	

	/**********************************************************************
	 * APELLIDOS
	 *******************************************************************/
	
	var apellidos=document.getElementById("apellidos");
	apellidos.addEventListener("blur",function() {
	
		if (apellidos.value!=""){
			var expressio= new RegExp(/(^[A-Z | a-z]+(?!\d))\s([A-Z | a-z]+(?!\d)$)/);
			if (expressio.test(apellidos.value)==true){
				apellidos.setAttribute("id","validoGreen");
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras con espacio con otra serie de letras sin otros caracteres");				
				div.appendChild(text);
				insertAfter(apellidos,div);
				apellidos.setAttribute("id","validoRojo");
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(apellidos,div);
			apellidos.setAttribute("id","validoRojo");
			
		}
			
				
	});
	
	/**********************************************************************
	 * CONTRASEÑA
	 *******************************************************************/
	
	var contrasena=document.getElementById("contrasena");
	contrasena.addEventListener("blur",function() {
	
		if (contrasena.value!=""){
			var expressio= new RegExp(/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/);
			if (expressio.test(contrasena.value)==true){
				contrasena.setAttribute("id","validoGreen");
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Como mínimo tiene que tener 8 caracteres, contener una mayuscula, minuscula i caracter especial");				
				div.appendChild(text);
				insertAfter(contrasena,div);
				contrasena.setAttribute("id","validoRojo");
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(contrasena,div);
			contrasena.setAttribute("id","validoRojo");
			
		}
			
				
	});
	

	/**********************************************************************
	 * CONTRASEÑA REPETICIO
	 *******************************************************************/
	
	var contrasena2=document.getElementById("contrasena2");
	contrasena2.addEventListener("blur",function() {
	
		if (contrasena2.value!=""){
			
			if (contrasena2.value==contrasena.value){
				contrasena2.setAttribute("id","validoGreen");
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("Las contraseñas no coinciden");				
				div.appendChild(text);
				insertAfter(contrasena2,div);
				contrasena2.setAttribute("id","validoRojo");
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(contrasena2,div);
			contrasena2.setAttribute("id","validoRojo");
			
		}
			
				
	});
	
	/**********************************************************************
	 * FECHA
	 *******************************************************************/
	
	var fecha=document.getElementById("fecha");
	fecha.addEventListener("blur",function() {
	
		if (fecha.value!=""){
			
			var expressio= new RegExp(/^.{10}$/);
			if (expressio.test(fecha.value)==true){
				fecha.setAttribute("id","validoGreen");
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("El año que has puesto no existe");				
				div.appendChild(text);
				insertAfter(fecha,div);
				fecha.setAttribute("id","validoRojo");
				
			}
			
		}else{
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			insertAfter(fecha,div);
			fecha.setAttribute("id","validoRojo");
			
		}
			
				
	});
	
	
	/**********************************************************************
	 * TELEFONO
	 *******************************************************************/
	
	var numero=document.getElementById("numero");
	numero.addEventListener("blur",function() {
	
		if (numero.value!=""){
			
			var expressio= new RegExp(/^\d{9}$/);
			if (expressio.test(numero.value)==true){
				numero.setAttribute("id","validoGreen");
				
			}else{
				
				div=document.createElement("div");
				text=document.createTextNode("El numero tiene que tener 9 digitos y no contener caracteres");				
				div.appendChild(text);
				insertAfter(numero,div);
				numero.setAttribute("id","validoRojo");
				
			
				
			}
			
		}
			
				
	});
	
	/**********************************************************************
	 * CHECKBOX
	 *******************************************************************/
	document.getElementById("aceptar").checked
	
	
}

function insertAfter(e,i){ 
    if(e.nextSibling){ 
        e.parentNode.insertBefore(i,e.nextSibling); 
    } else { 
        e.parentNode.appendChild(i); 
    }
}