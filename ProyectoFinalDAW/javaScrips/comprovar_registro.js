var div;
var text;
var validar_nick=false;
var validar_correo=false;
var validar_nombre=false;
var validar_apellidos=false;
var validar_contrasena=false;
var validar_contrasena2=false;
var validar_fecha=false;
var validar_telefono=true;
var borrado;
var borrado2;
var borrado3;
var borrado4;
var borrado5;
var borrado6;
var borrado7;
var borrado8;



function inici(){
	
	
	/**********************************************************************
	 * NICK
	 *******************************************************************/
	
	var nick=document.getElementById("nick");
	nick.addEventListener("blur",function() {
	
		if (nick.value!=""){			
				nick.setAttribute("id","validoGreen");
				validar_nick=true;
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
			insertAfter(nick,div);
			nick.setAttribute("id","validoRojo");
			validar_nick=false;
		
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
				validar_correo=true;
				if (document.getElementById("borrado2")!= null){
					borrado2 = document.getElementById("borrado2");
					borrado2.remove();
				}
			}else{
				if (document.getElementById("borrado2")!= null){
					borrado2 = document.getElementById("borrado2");
					borrado2.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no corresponde a una direccion de correo electronico");				
				div.appendChild(text);
				div.setAttribute("id","borrado2");
				insertAfter(correo,div);
				correo.setAttribute("id","validoRojo");
			    validar_correo=false;
			}
			
		}else{
			if (document.getElementById("borrado2")!= null){
				borrado2 = document.getElementById("borrado2");
				borrado2.remove();
			}
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			div.setAttribute("id","borrado2");
			insertAfter(correo,div);
			correo.setAttribute("id","validoRojo");
			validar_correo=false;
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
				validar_nombre=true;
				if (document.getElementById("borrado3")!= null){
					borrado3 = document.getElementById("borrado3");
					borrado3.remove();
				}
			}else{
				if (document.getElementById("borrado3")!= null){
					borrado3 = document.getElementById("borrado3");
					borrado3.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras sin espacio u otros caracteres");				
				div.appendChild(text);
				div.setAttribute("id","borrado3");
				insertAfter(nombre,div);
				nombre.setAttribute("id","validoRojo");
				 validar_nombre=false;
			}
			
		}else{
			if (document.getElementById("borrado3")!= null){
				borrado3 = document.getElementById("borrado3");
				borrado3.remove();
			}
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			div.setAttribute("id","borrado3");
			insertAfter(nombre,div);
			nombre.setAttribute("id","validoRojo");
			validar_nombre=false;
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
				validar_apellidos=true;
				if (document.getElementById("borrado4")!= null){
					borrado4 = document.getElementById("borrado4");
					borrado4.remove();
				}
			}else{
				if (document.getElementById("borrado4")!= null){
					borrado4 = document.getElementById("borrado4");
					borrado4.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("Lo que has puesto no se corresponde a una serie de letras con espacio con otra serie de letras sin otros caracteres");				
				div.appendChild(text);
				div.setAttribute("id","borrado4");
				insertAfter(apellidos,div);
				apellidos.setAttribute("id","validoRojo");
				validar_apellidos=false;
			}
			
		}else{
			if (document.getElementById("borrado4")!= null){
				borrado4 = document.getElementById("borrado4");
				borrado4.remove();
			}
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			div.setAttribute("id","borrado4");
			insertAfter(apellidos,div);
			apellidos.setAttribute("id","validoRojo");
			validar_apellidos=false;
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
				validar_contrasena=true;
				if (document.getElementById("borrado5")!= null){
					borrado5 = document.getElementById("borrado5");
					borrado5.remove();
				}
			}else{
				if (document.getElementById("borrado5")!= null){
					borrado5 = document.getElementById("borrado5");
					borrado5.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("Como mínimo tiene que tener 8 caracteres, contener una mayuscula, minuscula i caracter especial");				
				div.appendChild(text);
				div.setAttribute("id","borrado5");
				insertAfter(contrasena,div);
				contrasena.setAttribute("id","validoRojo");
				validar_contrasena=false;
			}
			
		}else{
			if (document.getElementById("borrado5")!= null){
				borrado5 = document.getElementById("borrado5");
				borrado5.remove();
			}
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			div.setAttribute("id","borrado5");
			insertAfter(contrasena,div);
			contrasena.setAttribute("id","validoRojo");
			validar_contrasena=false;
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
				validar_contrasena2=true;
				if (document.getElementById("borrado6")!= null){
					borrado6 = document.getElementById("borrado6");
					borrado6.remove();
				}
			}else{
				if (document.getElementById("borrado6")!= null){
					borrado6 = document.getElementById("borrado6");
					borrado6.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("Las contraseñas no coinciden");				
				div.appendChild(text);
				div.setAttribute("id","borrado6");
				insertAfter(contrasena2,div);
				contrasena2.setAttribute("id","validoRojo");
				validar_contrasena2=false;
			}
			
		}else{
			if (document.getElementById("borrado6")!= null){
				borrado6 = document.getElementById("borrado6");
				borrado6.remove();
			}
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			div.setAttribute("id","borrado6");
			insertAfter(contrasena2,div);
			contrasena2.setAttribute("id","validoRojo");
			validar_contrasena2=false;
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
				validar_fecha=true;
				if (document.getElementById("borrado7")!= null){
					borrado7 = document.getElementById("borrado7");
					borrado7.remove();
				}
			}else{
				if (document.getElementById("borrado7")!= null){
					borrado7 = document.getElementById("borrado7");
					borrado7.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("El año que has puesto no existe");				
				div.appendChild(text);
				div.setAttribute("id","borrado7");
				insertAfter(fecha,div);
				fecha.setAttribute("id","validoRojo");
				validar_fecha=false;
			}
			
		}else{
			if (document.getElementById("borrado7")!= null){
				borrado7 = document.getElementById("borrado7");
				borrado7.remove();
			}
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			div.setAttribute("id","borrado7");
			insertAfter(fecha,div);
			fecha.setAttribute("id","validoRojo");
			validar_fecha=false;
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
				 validar_telefono=true;
				 if (document.getElementById("borrado8")!= null){
						borrado8 = document.getElementById("borrado8");
						borrado8.remove();
					}
			}else{
				if (document.getElementById("borrado8")!= null){
					borrado8 = document.getElementById("borrado8");
					borrado8.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("El numero tiene que tener 9 digitos y no contener caracteres");				
				div.appendChild(text);
				div.setAttribute("id","borrado8");
				insertAfter(numero,div);
				numero.setAttribute("id","validoRojo");
				 validar_telefono=false;
			
				
			}
			
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

		if(validar_nick==true && validar_correo==true  && validar_nombre==true  && validar_apellidos==true  && validar_contrasena==true  
				&& validar_contrasena2==true  && validar_fecha==true  && validar_telefono==true && document.getElementById("aceptar").checked==true ){
			return true;
		}else{
			 return false;
		}
	 
	}
