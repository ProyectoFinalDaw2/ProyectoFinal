<?php 
session_start();

if (isset($_SESSION["inicioSesion"])){
	$nick=$_SESSION["inicioSesion"];

}
?>
<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- viewport meta to reset iPhone inital scale -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<title>Manga's Umbrella Corporation</title>
		<!-------------------------------------------------- css3-mediaqueries.js for IE8 or older----------------------------->
		<link rel="shortcut icon" type="image/x-icon" href="../style/imagenes/favicon.ico" />
		<!-------------------------------------------------- css3-mediaqueries.js for IE8 or older----------------------------->
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<!------------------------------------------------------------ CSS------------------------------------------------>
		<link href="../style/style.css" rel="stylesheet" type="text/css" media="screen" />
		<!------------------------------------------------------------ Bootstra------------------------------------------------>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
		<!------------------------------------------------------------ JQUERY------------------------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<!------------------------------------------------------------ Java scrips ------------------------------------------------->
		<script src="../javaScripts/login.js"></script>

	</head>

	<body>
		<!------------------------------------------------------------PAGEWRAP------------------------------------------------->
		<div id="pagewrap">
			<!------------------------------------------------------------NAV------------------------------------------------->
			<nav class="navbar navbar-inverse navbar-fixed-top">
		       			<ul>
		       		<div id="logo"><li><a href="#"><img src="../style/imagenes/simbolo.png" id="medida1"></a>Manga's Umbrella Corporation</li></div>
					  <li><a href="#" class="btn btn-info">Inicio</a></li>
					  <li><a href="mangas.php" class="btn btn-info">Mangas</a></li>
					   <li><a href="noticias.php" class="btn btn-info">Noticias</a></li>
					  <li><a href="registrarse.php" class="btn btn-info">Registrate</a></li>
					   <!-- Login Starts Here -->
					   				   
						<li id="login">
					    <div id="loginContainer">
						<div id="loginButton">
						<a href="#" id="loginButton" class="btn btn-warning"><span>Login</span><em></em></a>
						<div style="clear:both"></div>
						<div id="loginBox">
						    <form id="loginForm" action="../controller/login.php" method="post" name="login_form">
							<fieldset id="body">
								<?php if (isset($_SESSION["inicioSesionFallida"])){?>
								<fieldset>
								<label id="inicioSesionFallida">Inicio Sesion Incorrecto</label>
								<?php }?>
							    <fieldset>
								<label for="email">Email  <input type="text" name="correo" id="email" /></label>
							       
							    </fieldset>
							    <fieldset>
								<label for="password">ContraseÃ±a  <input type="password" name="contrasena" id="password" /></label>
							       
							    </fieldset>
							    <input type="submit" id="login" value="Entrar"  class="btn btn-info" onclick="formhash(this.form, this.form.password);"/>
							    <!--  <label for="checkbox"><input type="checkbox" id="checkbox" />Recuerdame</label> -->
							</fieldset>
							<!--<span><a href="#">Has olvidado la contraseÃ±a?</a></span> -->
						    </form>
						</div>
						</div>
					    </div>
					  </li>
					 <!-- Login Ends Here -->
				</ul>
		    	</nav>
			<!------------------------------------------------------------ FINAL NAV------------------------------------------------->
			<!------------------------------------------------------------ HEADER------------------------------------------------->
			
			<div id="header">
				<div id="topc">
				<h3>Terminos de Uso</h3>
				</div>
				<div id="fondosBlancos">
				 <h1>Al aceptar los siguientes puntos, usted se compromete a ...</h1>     
			     <small>Este acuerdo se ha redactado en inglés de Estados Unidos. En caso de existir discrepancias entre el original y una versión traducida, el original en inglés es el documento vinculante.  La sección 16 contiene modificaciones a las condiciones generales que atañen a los usuarios que no se encuentran en Estados Unidos.
Fecha de la última revisión: 30 de enero de 2015
Declaración de derechos y responsabilidades
Esta Declaración de derechos y responsabilidades (en lo sucesivo, "Declaración", "Condiciones" o "DDR") tiene su origen en los Principios de Facebook y contiene las condiciones de servicio que rigen nuestra relación con los usuarios y con todos aquellos que interactúan con Facebook, así como con las marcas, los productos y los servicios de Facebook, que se denominan "servicios de Facebook" o "servicios". Al utilizar o acceder a los servicios de Facebook, muestras tu conformidad con esta Declaración, que se actualiza periódicamente según se estipula en la sección 13 más adelante. Al final de este documento también encontrarás otros recursos que te ayudarán a comprender cómo funciona Facebook.
Puesto que Facebook ofrece una amplia gama de servicios, es posible que te pidamos que leas y aceptes condiciones complementarias aplicables a tu interacción con una aplicación, un producto o un servicio determinados. En caso de que esas condiciones complementarias entren en conflicto con esta DDR, las condiciones complementarias asociadas con la aplicación, el producto o el servicio prevalecerán en lo referente al uso de tales aplicaciones, productos o servicios en caso de conflicto.
Privacidad

Tu privacidad es muy importante para nosotros. Hemos diseñado nuestra Política de datos para ayudarte a comprender cómo puedes utilizar Facebook para compartir contenido con otras personas y cómo recopilamos y podemos utilizar tu contenido e información. Te animamos a que leas nuestra Política de datos y a que la utilices con el fin de poder tomar decisiones fundamentadas. 
 
Compartir el contenido y la información

Eres el propietario de todo el contenido y la información que publicas en Facebook y puedes controlar cómo se comparte a través de la configuración de la privacidad y de las aplicaciones. Además:
En relación con el contenido con derechos de propiedad intelectual (contenido de PI), como fotos y vídeos, nos otorgas específicamente el siguiente permiso, sujeto a tu configuración de la privacidad y de las aplicaciones: nos otorgas una licencia no exclusiva, transferible, con posibilidad de ser subotorgada, libre de regalías y aplicable globalmente para utilizar cualquier contenido de IP que publiques en Facebook o en conexión con Facebook (licencia de PI). Esta licencia de PI finaliza cuando eliminas tu contenido de PI o tu cuenta, a menos que el contenido se haya compartido con terceros y estos no lo hayan eliminado.
Cuando eliminas contenido de PI, este se elimina de forma similar a cuando vacías la papelera de reciclaje de tu ordenador. No obstante, entiendes que es posible que el contenido eliminado permanezca en copias de seguridad durante un plazo de tiempo razonable (si bien no estará disponible para terceros).
Al utilizar una aplicación, esta podrá solicitarte permiso para acceder a tu contenido e información, así como al contenido y la información que otras personas han compartido contigo.  Exigimos que las aplicaciones respeten tu configuración de privacidad, y será tu acuerdo con la aplicación en cuestión el que regirá la forma en que esta utilizará, almacenará y transferirá el contenido y la información que compartas.  Para obtener más información sobre la plataforma, incluido cómo controlar qué información pueden compartir otras personas con las aplicaciones, lee nuestra Política de datos y la página de la plataforma.
Cuando publicas contenido o información con la configuración "Público", significa que permites que todos, incluidas las personas que son ajenas a Facebook, accedan y usen dicha información y la asocien a ti (por ejemplo, tu nombre y foto del perfil).
Siempre valoramos tus comentarios y sugerencias acerca de Facebook, pero debes entender que podríamos utilizarlos sin obligación de compensarte por ello (del mismo modo que tú no tienes obligación de ofrecerlos).
 
Seguridad

Hacemos todo lo posible para hacer que Facebook sea un sitio seguro, pero no podemos garantizarlo. Necesitamos tu ayuda para que así sea, lo que implica los siguientes compromisos de tu parte:
No publicarás comunicaciones comerciales no autorizadas (como correo no deseado, "spam") en Facebook.
No recopilarás información o contenido de otros usuarios ni accederás a Facebook utilizando medios automáticos (como harvesting bots, robots, arañas o scrapers) sin nuestro permiso previo.
No participarás en marketing multinivel ilegal, como el de tipo piramidal, en Facebook.
No subirás virus ni código malintencionado de ningún tipo.
No solicitarás información de inicio de sesión ni accederás a una cuenta perteneciente a otro usuario.
No molestarás, intimidarás ni acosarás a ningún usuario.
No publicarás contenido que resulte hiriente, intimidatorio, pornográfico, que incite a la violencia o que contenga desnudos o violencia gráfica o injustificada.
No desarrollarás ni harás uso de aplicaciones de terceros que contengan, publiciten o promocionen de cualquier otro modo contenido relacionado con el consumo de alcohol o las citas, o bien dirigido a público adulto (incluidos los anuncios) sin las restricciones de edad apropiadas.
No utilizarás Facebook para actos ilícitos, engañosos, malintencionados o discriminatorios.
No realizarás ninguna acción que pudiera inhabilitar, sobrecargar o afectar al funcionamiento correcto o al aspecto de Facebook, como un ataque de denegación de servicio o la alteración de la presentación de páginas u otra funcionalidad de Facebook.
No facilitarás ni fomentarás el incumplimiento de esta Declaración o nuestras políticas.
 
Seguridad de la cuenta y registro

Los usuarios de Facebook proporcionan sus nombres e información reales y necesitamos tu colaboración para que siga siendo así. Estos son algunos de los compromisos que aceptas en relación con el registro y mantenimiento de la seguridad de tu cuenta:
No proporcionarás información personal falsa en Facebook, ni crearás una cuenta para otras personas sin su autorización.
No crearás más de una cuenta personal.
Si inhabilitamos tu cuenta, no crearás otra sin nuestro permiso.
No utilizarás tu biografía personal para tu propio beneficio comercial, sino que para ello utilizarás una página de Facebook.
No utilizarás Facebook si eres menor de 14 años.
No utilizarás Facebook si has sido declarado culpable de un delito sexual.
Mantendrás la información de contacto exacta y actualizada.
No compartirás tu contraseña (o, en el caso de los desarrolladores, tu clave secreta), no dejarás que otra persona acceda a tu cuenta ni harás nada que pueda poner en peligro la seguridad de tu cuenta.
No transferirás la cuenta (incluida cualquier página o aplicación que administres) a nadie sin nuestro consentimiento previo por escrito.
Si seleccionas un nombre de usuario o identificador similar para tu cuenta o página, nos reservamos el derecho de eliminarlo o reclamarlo si lo consideramos oportuno (por ejemplo, si el propietario de una marca comercial se queja por un nombre de usuario que no esté estrechamente relacionado con el nombre real del usuario).
 
Protección de los derechos de otras personas

Respetamos los derechos de otras personas y esperamos que tú hagas lo mismo.
No publicarás contenido ni realizarás ninguna acción en Facebook que infrinja o viole los derechos de otros o que viole la ley de algún modo.
Podemos retirar cualquier contenido o información que publiques en Facebook si consideramos que infringe esta Declaración o nuestras políticas.
Te proporcionamos las herramientas necesarias para ayudarte a proteger tus derechos de propiedad intelectual. Para obtener más información, visita nuestra página Cómo informar de presuntas infracciones de los derechos de propiedad intelectual.
Si retiramos tu contenido debido a una infracción de los derechos de autor de otra persona y consideras que ha sido un error, tendrás la posibilidad de apelar la decisión.
Si infringes repetidamente los derechos de propiedad intelectual de otra persona, desactivaremos tu cuenta si es oportuno.
No podrás utilizar nuestros derechos de autor ni nuestras marcas comerciales, ni tampoco ninguna marca que se parezca a las nuestras y cuya semejanza pueda dar lugar a confusiones, excepto en los términos que lo permitan nuestras Normas de uso de las marcas de forma expresa o a menos que recibas consentimiento previo por escrito de Facebook.
Si obtienes información de los usuarios, deberás obtener su consentimiento previo, dejar claro que eres tú (y no Facebook) quien recopila la información y publicar una política de privacidad que explique qué datos recopilas y cómo los usarás.
No publicarás los documentos de identificación ni información financiera delicada de nadie en Facebook.
No etiquetarás a los usuarios ni enviarás invitaciones de correo electrónico a quienes no sean usuarios sin su consentimiento. Facebook ofrece herramientas de denuncia social para que los usuarios puedan hacernos llegar sus opiniones sobre el etiquetado.
 
Dispositivos móviles y de otros tipos

Actualmente ofrecemos nuestros servicios para dispositivos móviles de forma gratuita pero ten en cuenta que se aplicarán las tarifas normales de tu operadora, por ejemplo, para mensajes de texto y datos.
En caso de que cambies o desactives tu número de teléfono móvil, actualizarás la información de tu cuenta de Facebook en un plazo de 48 horas para garantizar que los mensajes no se le envíen por error a la persona que pudiera adquirir tu antiguo número.
Proporcionas tu consentimiento y todos los derechos necesarios para permitir que los usuarios sincronicen (incluso a través de una aplicación) sus dispositivos con cualquier información que puedan ver en Facebook.
 
Pagos

Si realizas un pago en Facebook, aceptas nuestras Condiciones de pago, a menos que se especifique que se aplican otras condiciones.
 
Disposiciones especiales aplicables a desarrolladores u operadores de aplicaciones y sitios web 

Si eres desarrollador u operador de una aplicación de la plataforma o de un sitio web, o si usas plug-ins sociales, debes cumplir las Normas de la plataforma de Facebook.
Acerca de los anuncios u otro contenido comercial servido u optimizado por Facebook

Nuestro objetivo es ofrecer anuncios y otro contenido comercial o patrocinado que sea valioso para nuestros usuarios y anunciantes. Para ayudarnos a lograrlo, aceptas lo siguiente:
Nos concedes permiso para usar tu nombre, foto del perfil, contenido e información en relación con contenido comercial, patrocinado o relacionado (como una marca que te guste) que sirvamos o mejoremos. Esto significa, por ejemplo, que permites que una empresa u otra entidad nos pague por mostrar tu nombre y/o foto del perfil con tu contenido o información sin que recibas ninguna compensación por ello. Si has seleccionado un público específico para tu contenido o información, respetaremos tu elección cuando lo usemos.
No proporcionamos tu contenido o información a anunciantes sin tu consentimiento.
Entiendes que es posible que no siempre identifiquemos las comunicaciones y los servicios pagados como tales.
 
Disposiciones especiales aplicables a anunciantes 

Si utilizas nuestras interfaces de creación de publicidad de autoservicio para crear, enviar o entregar anuncios u otras actividades o contenido comerciales o patrocinados (denominados de manera conjunta "interfaces de anuncios de autoservicio"), aceptas nuestras Condiciones de anuncios de autoservicio. Además, tus anuncios u otras actividades o contenido comerciales o patrocinados ubicados en Facebook o en nuestra red de editores deberán cumplir nuestras Políticas de publicidad.
Disposiciones especiales aplicables a páginas

Si creas o administras una página de Facebook, organizas una promoción o pones en circulación una oferta desde tu página, aceptas nuestras Condiciones de las páginas.
 
Disposiciones especiales aplicables al software

Si descargas o utilizas nuestro software, como un producto de software independiente, una aplicación o un plug-in para el navegador, aceptas que, periódicamente, el software puede descargar e instalar mejoras, actualizaciones y funciones adicionales a fin de mejorarlo y desarrollarlo.
No modificarás nuestro código fuente ni llevarás a cabo con él trabajos derivados, como descompilar o intentar de algún otro modo extraer dicho código fuente, excepto en los casos permitidos expresamente por una licencia de código abierto o si te damos nuestro consentimiento expreso por escrito.

Enmiendas

Te avisaremos antes de realizar cambios importantes en estas condiciones y te daremos la oportunidad de revisar y hacer comentarios sobre las condiciones revisadas antes de que continúes utilizando nuestros Servicios.
Si realizamos cambios en las políticas, normas u otras condiciones a las que haga referencia esta ﻿﻿declaración o que estén incorporadas en ella, lo indicaremos en la página Facebook Site Governance.
Tu uso continuado de los servicios de Facebook, una vez notificados los cambios de nuestras condiciones, políticas o normas, supondrá tu aceptación de las condiciones, políticas o normas modificadas.
 
Terminación

Si infringes la forma o el fondo de esta Declaración, creas riesgos de cualquier tipo para Facebook o nos expones a posibles responsabilidades jurídicas, podríamos impedirte el acceso a Facebook total o parcialmente. Te notificaremos por correo electrónico o la próxima vez que intentes acceder a tu cuenta. También puedes eliminar tu cuenta o desactivar tu aplicación en cualquier momento. En tales casos, esta Declaración cesará, pero las siguientes disposiciones continuarán vigentes: 2.2, 2.4, 3-5, 9.3 y 14-18. 
 
Disputas

Resolverás cualquier demanda, causa de acción o conflicto (colectivamente, "demanda") que tengas con nosotros surgida de o relacionada con la presente Declaración o con Facebook únicamente en el tribunal del Distrito Norte de California o en un tribunal estatal del Condado de San Mateo, y aceptas que sean dichos tribunales los competentes a la hora de resolver los litigios de dichos conflictos. Las leyes del estado de California rigen esta Declaración, así como cualquier demanda que pudiera surgir entre tú y nosotros, independientemente de las disposiciones sobre conflictos de leyes.
Si alguien interpone una demanda contra nosotros relacionada con tus acciones, tu contenido o tu información en Facebook, te encargarás de indemnizarnos y nos librarás de la responsabilidad por todos los posibles daños, pérdidas y gastos de cualquier tipo (incluidos los costes y tasas legales razonables) relacionados con dicha demanda. Aunque proporcionamos normas para la conducta de los usuarios, no controlamos ni dirigimos sus acciones en Facebook y no somos responsables del contenido o la información que los usuarios transmitan o compartan en Facebook. No somos responsables de ningún contenido que se considere ofensivo, inapropiado, obsceno, ilegal o inaceptable que puedas encontrar en Facebook. No nos hacemos responsables de la conducta de ningún usuario de Facebook, ya sea en internet o en otros medios.
INTENTAMOS MANTENER FACEBOOK EN FUNCIONAMIENTO, SIN ERRORES Y SEGURO, PERO LO UTILIZAS BAJO TU PROPIA RESPONSABILIDAD. PROPORCIONAMOS FACEBOOK TAL CUAL, SIN GARANTÍA ALGUNA EXPRESA O IMPLÍCITA, INCLUIDAS, ENTRE OTRAS, LAS GARANTÍAS DE COMERCIABILIDAD, ADECUACIÓN A UN FIN PARTICULAR Y NO INCUMPLIMIENTO. NO GARANTIZAMOS QUE FACEBOOK SEA SIEMPRE SEGURO O ESTÉ LIBRE DE ERRORES, NI QUE FUNCIONE SIEMPRE SIN INTERRUPCIONES, RETRASOS O IMPERFECCIONES. FACEBOOK NO SE RESPONSABILIZA DE LAS ACCIONES, EL CONTENIDO, LA INFORMACIÓN O LOS DATOS DE TERCEROS Y POR LA PRESENTE NOS DISPENSAS A NOSOTROS, NUESTROS DIRECTIVOS, EMPLEADOS Y AGENTES DE CUALQUIER DEMANDA O DAÑOS, CONOCIDOS O DESCONOCIDOS, DERIVADOS DE O DE ALGÚN MODO RELACIONADOS CON CUALQUIER DEMANDA QUE TENGAS INTERPUESTA CONTRA TALES TERCEROS. SI ERES RESIDENTE DE CALIFORNIA, NO SE TE APLICA EL CÓDIGO CIVIL DE CALIFORNIA §1542 , SEGÚN EL CUAL: UNA DISPENSACIÓN GENERAL NO INCLUYE LAS DEMANDAS QUE EL ACREEDOR DESCONOCE O NO SOSPECHA QUE EXISTEN EN SU FAVOR EN EL MOMENTO DE LA EJECUCIÓN DE LA RENUNCIA, LA CUAL, SI FUERA CONOCIDA POR ÉL, DEBERÁ HABER AFECTADO MATERIALMENTE A SU RELACIÓN CON EL DEUDOR. NO SEREMOS RESPONSABLES DE PÉRDIDAS DE BENEFICIOS NI DE OTROS DAÑOS EMERGENTES, ESPECIALES, INDIRECTOS O ACCESORIOS DERIVADOS DE ESTA DECLARACIÓN DE FACEBOOK O RELACIONADOS CON ELLA, AUNQUE SE HAYA AVISADO DE LA POSIBILIDAD DE QUE SE PRODUZCAN DICHOS DAÑOS. NUESTRA RESPONSABILIDAD CONJUNTA DERIVADA DE LA PRESENTE DECLARACIÓN O DE FACEBOOK NO PODRÁ SOBREPASAR LA CANTIDAD DE CIEN DÓLARES (100 USD) O, SI ES MAYOR, EL IMPORTE QUE NOS HAYAS ABONADO EN LOS ÚLTIMOS DOCE MESES. LAS LEYES APLICABLES PODRÍAN NO PERMITIR LA LIMITACIÓN O EXCLUSIÓN DE RESPONSABILIDAD POR DAÑOS ACCESORIOS O EMERGENTES, POR LO QUE LA LIMITACIÓN O EXCLUSIÓN ANTERIOR PODRÍA NO SER APLICABLE EN TU CASO. EN TALES CASOS, LA RESPONSABILIDAD DE FACEBOOK SE LIMITARÁ AL GRADO MÁXIMO PERMITIDO POR LA LEY APLICABLE.
 
Disposiciones especiales aplicables a usuarios que no residan en Estados Unidos

Nos esforzamos por crear una comunidad global con normas coherentes para todos, pero también por respetar la legislación local. Las siguientes disposiciones se aplicarán a los usuarios y a las personas que no sean usuarias de Facebook que se encuentran fuera de Estados Unidos:
Das tu consentimiento para que tus datos personales sean transferidos y procesados en Estados Unidos.
Si te encuentras en un país bajo el embargo de Estados Unidos o que forme parte de la lista SDN (Specially Designated Nationals, Nacionales especialmente designados) del Departamento del Tesoro de Estados Unidos, no participarás en actividades comerciales en Facebook (como publicidad o pago) ni utilizarás una aplicación o sitio web de la Plataforma. No utilizarás Facebook si se te ha prohibido recibir productos, servicios o software procedente de Estados Unidos.
Las condiciones aplicables específicamente a los usuarios de Facebook en Alemania están disponibles aquí.
Definiciones

Con "Facebook" o "Servicios de Facebook" hacemos referencia a las funciones y los servicios que están disponibles, incluso a través de (a) nuestro sitio web en www.facebook.com y cualquier otro sitio web con la marca Facebook o con otra marca compartida (incluidos subdominios, versiones internacionales, widgets y versiones móviles); (b) nuestra plataforma; (c) plug-ins sociales como el botón "Me gusta", el botón "Compartir" y otras propuestas similares; y (d) otros soportes, marcas, productos, servicios, software (como una barra de herramientas), dispositivos o redes existentes o que se desarrollen en un futuro. Facebook se reserva el derecho de decidir, según su propio criterio, que determinadas marcas, productos o servicios estén sujetos a condiciones independientes y no a esta DDR.
El término "Plataforma" se refiere al conjunto de API y servicios (como el contenido) que permiten que otras personas, incluidos los desarrolladores de aplicaciones y los operadores de sitios web, obtengan datos de Facebook o nos los proporcionen a nosotros.
El término "información" se refiere a los hechos y otra información sobre ti, incluidas las acciones que realizan los usuarios y las personas que, sin ser usuarios, interactúan con Facebook.
El término "contenido" se refiere a cualquier información que tú u otros usuarios publiquéis, proporcionéis o compartáis utilizando los Servicios de Facebook.
El término "datos" o "datos de usuario" se refiere a los datos, incluidos el contenido o la información de un usuario, que otros pueden obtener de Facebook o proporcionar a Facebook a través de la plataforma.
El término "publicar" significa publicar en Facebook o proporcionar contenido de otro modo mediante Facebook.
Por "usar" se entiende utilizar, ejecutar, copiar, reproducir o mostrar públicamente, distribuir, modificar, traducir y crear obras derivadas.
El término "aplicación" significa cualquier aplicación o sitio web que usa la plataforma o accede a ella, así como cualquiera que recibe o ha recibido datos de nosotros.  Si ya no accedes a la plataforma pero no has eliminado todos los datos que te hemos proporcionado, el término "aplicación" continuará siendo válido hasta que los elimines.
Con "Marcas comerciales" nos referimos a la lista de marcas comerciales que se indican aquí. 
 
Otros

Si resides o tienes tu ubicación de actividad comercial principal en EE. UU. o Canadá, esta Declaración constituye el acuerdo entre tú y Facebook, Inc. De lo contrario, esta Declaración constituye el acuerdo entre tú y Facebook Ireland Limited.  Las referencias a “nos”, “nosotros” y “nuestro” significan Facebook, Inc. o Facebook Ireland Limited, según corresponda.
Esta Declaración constituye el acuerdo completo entre las partes en relación con Facebook y sustituye cualquier acuerdo previo.
Si alguna parte de esta Declaración no puede hacerse cumplir, la parte restante seguirá teniendo validez y efecto completos.
Si no cumpliéramos alguna parte de esta Declaración, no se considerará una exención.
Cualquier corrección a o exención de esta Declaración deberá hacerse por escrito y estar firmada por nosotros.
No transferirás ninguno de tus derechos u obligaciones bajo esta Declaración a ningún tercero sin nuestro consentimiento.
Todos nuestros derechos y obligaciones según esta Declaración son asignables libremente por nosotros en conexión con una fusión, adquisición o venta de activos o por efecto de ley o de algún otro modo.
Nada de lo dispuesto en esta Declaración nos impedirá cumplir la ley.
Esta Declaración no otorga derechos de beneficiario a ningún tercero.
Nos reservamos todos los derechos que no te hayamos concedido de forma expresa.
Cuando accedas a Facebook o lo uses deberás cumplir todas las leyes aplicables.

Al utilizar los Servicios de Facebook o al acceder a estos, nos autorizas para recopilar y utilizar dicho contenido e información según la Política de datos y sus correcciones periódicas. Puede que también te interese consultar los siguientes documentos, ya que contienen información adicional sobre el uso de Facebook:
Condiciones de pago: estas condiciones adicionales se aplican a todos los pagos que se realicen a través de Facebook, a menos que se indique que se aplican otras condiciones.
Página de la plataforma: esta página te ayuda a comprender mejor lo que sucede cuando añades una aplicación de terceros o usas Facebook Connect, incluido el modo en que pueden acceder y utilizar tus datos.
Normas de la plataforma de Facebook: estas normas describen las políticas que se aplican a las aplicaciones, incluidos los sitios Connect.
Políticas de publicidad: estas normas describen las políticas que se aplican a los anuncios publicados en Facebook.
Condiciones de publicidad de autoservicio: estas condiciones se aplican cuando utilices interfaces de anuncios de autoservicio para crear, enviar o entregar anuncios u otras actividades o contenido comerciales o patrocinados.
Normas de las promociones: estas normas describen las políticas que se aplican si ofreces concursos, apuestas y otros tipos de promociones a través de Facebook.
Recursos relacionados con la marca de Facebook: estas normas describen las políticas que se aplican a las marcas comerciales, logotipos y capturas de pantalla de Facebook.
Cómo informar de presuntas infracciones de los derechos de propiedad intelectual
Condiciones de las páginas: estas normas se aplican al uso que realizas de las páginas de Facebook.
Normas comunitarias: estas normas describen nuestras expectativas en relación con el contenido que publicas en Facebook y con tu actividad en Facebook.

Para acceder a la Declaración de derechos y responsabilidades en otros idiomas, cambia el idioma de tu sesión de Facebook haciendo clic en el enlace situado en la esquina inferior izquierda de la mayoría de las páginas del sitio.  Si la Declaración no está disponible en el idioma que elijas se te mostrará la versión en inglés.</small>
				
		    </div>	
		
			
			<!------------------------------------------------------------ FINAL HEADER------------------------------------------------->
			
			<!------------------------------------------------------------FOOTER------------------------------------------------->
			<footer>
				<p>&copy; Designet and Created by Judit CerdÃ  Izquierdo and Ibis Emmanuel</p>
			</footer>
			<!------------------------------------------------------------FINAL FOOTER------------------------------------------------->
		</div>
		<!------------------------------------------------------------  FINAL PAGEWRAP------------------------------------------------->

	</body>
</html>


