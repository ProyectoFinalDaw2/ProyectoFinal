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
var validar_captcha=false;
var borrado;
var borrado2;
var borrado3;
var borrado4;
var borrado5;
var borrado6;
var borrado7;
var borrado8;
var borrado9;
var borrado10;
var caixa;
var imatge;


function inici(){
	
	validar();
    crearCaptcha();
	
}

function crearCaptcha(){
	
	if (captcha.value!=""){
		if (document.getElementById("borrado9")!= null){
			borrado9 = document.getElementById("borrado9");
			borrado9.remove();
		}
		div=document.createElement("div");
		text=document.createTextNode("El captcha no coinciden");				
		div.appendChild(text);
		div.setAttribute("id","borrado9");
		insertAfter(captcha,div);
		captcha.setAttribute("id","validoRojo");
		validar_captcha=false;
	}
	
	
	
	caixa=document.getElementById("imatges");
	imatge=document.createElement("img");
	imatge.src="../ajax/captcha.php";
	imatge.setAttribute("id","captcha");
	caixa.appendChild(imatge);
	
	var retweet=document.getElementById("retweet");
	retweet.addEventListener("click",function() {
		caixa.removeChild(imatge);
		
		
			
			peticion_http=inicializa_xhr();

			peticion_http.onreadystatechange = obtenerRespuesta;

			  peticion_http.open('GET', "../ajax/captcha.php", true);
			  peticion_http.send(null);
		
	});
}

function inicializa_xhr() {  //aquesta funció crea un objecte de tipus AJAX
	  if (window.XMLHttpRequest) {
	    return new XMLHttpRequest(); 
	  } else if (window.ActiveXObject) {
	    return new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 
}

function obtenerRespuesta(){
	
	if(peticion_http.readyState == 4) {
	      if(peticion_http.status == 200) {
	    	 
	    	  	
	    	  	caixa=document.getElementById("imatges");
	    		imatge=document.createElement("img");
	    		imatge.src="../ajax/captcha.php";
	    		imatge.setAttribute("id","captcha");
	    		caixa.appendChild(imatge);
	  			
		
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

function obtenerRespuesta2(){
	
	if(peticion_http2.readyState == 4) {
	      if(peticion_http2.status == 200) {
	    	  
	    	 var nick=document.getElementById("nick");
	    	
	    	 var buscadorNick=peticion_http2.responseText; 
			
	    	if (buscadorNick!="si"){
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
	    		
	    		nick.style.borderColor = "green";
	    		nick.style.borderWidth = "2px";
				validar_nick=true;
				
				
		
	    	}else{
	    		if (document.getElementById("borrado")!= null){
					borrado = document.getElementById("borrado");
					borrado.remove();
				}
	    		
				div=document.createElement("div");
				text=document.createTextNode("Este Nick ya esta registrado en nustra base de datos");				
				div.appendChild(text);
				div.setAttribute("id","borrado");
				insertAfter(nick,div);
				nick.style.borderColor = "red";
				nick.style.borderWidth = "2px";
				validar_nick=false;
				
			}
	    	
	    	
	    	
	      }
	}
}

function obtenerRespuesta3(){
	
	if(peticion_http3.readyState == 4) {
	      if(peticion_http3.status == 200) {
	    	  
	    	 
	    	 var correo=document.getElementById("correo");
	    	
	    	 var buscadorCorreo=peticion_http3.responseText; 
			
	    	if (buscadorCorreo!="si"){
	    		if (document.getElementById("borrado2")!= null){
					borrado2 = document.getElementById("borrado2");
					borrado2.remove();
				}
	    		
	    		
	    		correo.style.borderColor = "green";
	    		correo.style.borderWidth = "2px";
				validar_correo=true;
				
				
		
	    	}else{
	    		if (document.getElementById("borrado2")!= null){
					borrado2 = document.getElementById("borrado2");
					borrado2.remove();
				}
	    		
				div=document.createElement("div");
				text=document.createTextNode("Este Correo ya esta registrado en nustra base de datos");				
				div.appendChild(text);
				div.setAttribute("id","borrado2");
				insertAfter(correo,div);
				correo.style.borderColor = "red";
				correo.style.borderWidth = "2px";
				validar_correo=false;
				
			}
	    	
	    	
	    	
	      }
	}
}

function validateMyForm(){

		if(validar_nick==true && validar_correo==true  && validar_nombre==true  && validar_apellidos==true  && validar_contrasena==true  
				&& validar_contrasena2==true  && validar_fecha==true  && validar_telefono==true && document.getElementById("aceptar").checked==true && validar_captcha==true){
			return true;
		}else{
			 return false;
		}
	 
	}

function validar(){

	/**********************************************************************
	 * NICK
	 *******************************************************************/
	
	var nick=document.getElementById("nick");
	nick.addEventListener("blur",function() {
	
		if (nick.value!=""){	
			
			
			
			
			peticion_http2=inicializa_xhr();

			peticion_http2.onreadystatechange = obtenerRespuesta2;

			peticion_http2.open("POST", "../ajax/comprueva_nick.php", true);

		    peticion_http2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			
			var aut=nick.value;
			peticion_http2.send("autor=" + aut);
			
			
	
				
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
			nick.style.borderColor = "red";
			nick.style.borderWidth = "2px";
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
				
				peticion_http3=inicializa_xhr();

				peticion_http3.onreadystatechange = obtenerRespuesta3;

				peticion_http3.open("POST", "../ajax/comprueva_correo.php", true);

			    peticion_http3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				
				var aut=correo.value;
				peticion_http3.send("correo=" + aut);
				
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
				correo.style.borderColor = "red";
				correo.style.borderWidth = "2px";
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
			correo.style.borderColor = "red";
			correo.style.borderWidth = "2px";
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
	
	/**********************************************************************
	 * CAPTCHA
	 *******************************************************************/
	
	var captcha=document.getElementById("captcha");
	captcha.addEventListener("blur",function() {
	
		if (captcha.value!=""){
			var lletres=captcha.value;
			if (lletres==getCookie()){
				captcha.setAttribute("id","validoGreen");
				validar_captcha=true;
				if (document.getElementById("borrado9")!= null){
					borrado9 = document.getElementById("borrado9");
					borrado9.remove();
				}
			}else{
				if (document.getElementById("borrado9")!= null){
					borrado9 = document.getElementById("borrado9");
					borrado9.remove();
				}
				div=document.createElement("div");
				text=document.createTextNode("El captcha no coinciden");				
				div.appendChild(text);
				div.setAttribute("id","borrado9");
				insertAfter(captcha,div);
				captcha.setAttribute("id","validoRojo");
				validar_captcha=false;
			}
			
		}else{
			if (document.getElementById("borrado9")!= null){
				borrado9 = document.getElementById("borrado9");
				borrado9.remove();
			}
			div=document.createElement("div");
			text=document.createTextNode("Este campo no se puede dejar en blanco");				
			div.appendChild(text);
			div.setAttribute("id","borrado9");
			insertAfter(captcha,div);
			captcha.setAttribute("id","validoRojo");
			validar_captcha=false;
		}
			
		
				
	});
	
	
	
}

function getCookie() {
	var cname="captcha";
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}
