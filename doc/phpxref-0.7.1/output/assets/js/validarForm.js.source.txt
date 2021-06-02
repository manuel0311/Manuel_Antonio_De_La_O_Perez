/**
 *
 * @author: Manuel Antonio De La O Pérez
 *
 */


//Variables
var nombreValido=false;
var apellidoValido=false;
var telefonovalido=false;
var DNIValido=false;
var emailvalido=false;
var contrasenaValida=false;
var IVAValido=false;
var numeroColegiadoValido=false;
var porcentajeValido=false;
var textoValido=false;
var precioValido=false;
var tipoServicio=false;
var actualizar=0;
var tratamiento=true;
var dientes=true;

/**
 * Valida los campos registro formulario Administrador instalación
 * si los datos son valido envia la informacion.
 */
function validarRegistroAdmin(){

		if (nombreValido && apellidoValido && telefonovalido && DNIValido && emailvalido && contrasenaValida) {
			document.getElementById("formularioAdministrador").submit();


		} else {

			alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
		}
	}

/**
 * Envia los dato del formulario registro Empleado al controlador.
 */
function addEmpleado(){
	if (nombreValido && apellidoValido && telefonovalido && DNIValido && numeroColegiadoValido && emailvalido && contrasenaValida) {

		document.getElementById("formularioTrabajador").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}

/**
 * Envia los datos del formulario registro Paciente al controlador.
 */
function addPaciente()
{
	if (nombreValido && apellidoValido && telefonovalido && DNIValido  && emailvalido && contrasenaValida) {

		document.getElementById("formularioPaciente").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}

/**
 * Envia los datos del formulario Paso_3 al controlador.
 */
function validarAddPorcentaje()
{
	if (porcentajeValido) {

		document.getElementById("formularioAdministrador").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}

/**
 * Envia el nuevo porcentaje
 */
function nuevoAddPorcentaje()
{
	if (porcentajeValido) {

		document.getElementById("nuevoIva").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}

/**
 * Actualiza los datos del usuario si los datos introducidos son correcto
 */
function actualizarDatosUsuario()
{

	if (actualizar>0) {

		document.getElementById("updateUser").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}

/**
 * valida los datos para añadir un servicio a la bbdd
 * Tipo Servicio Tratamiento / Prueba
 */
function addNuevoServicio()
{
	if(!document.querySelector('input[name="tipoServicio"]:checked')) {
		alert('Selecione el tipo de Servicio');

	}else{
		tipoServicio=true;

		if (nombreValido && textoValido && precioValido && tipoServicio) {
			document.getElementById("addServicio").submit();

		} else {

			alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
		}
	}
}

function completarPresupuesto()
{
	if(!document.querySelector('input[name="tipoServicio"]:checked')) {
		alert('Selecione el tipo de Servicio');

	}else if(!document.querySelector('option[name="tratamientos"]:checked')){
		alert('Seleccione el Tratamiento');
	}else if(!document.querySelector('input[name="dientes_lista[]"]:checked')){
		alert('Seleccione la/las piezas dentales ');
	}else{
		tipoServicio=true;
		tratamiento=true;
		dientes=true;

		if(tipoServicio && tratamiento && dientes && precioValido)
		{
			document.getElementById("altaPresupuesto").submit();

		}else{
			alert("Comprueba todo los campos")
		}


	}


}

/**
 * Validar campo nombre Formulario
 * no admite números solo letras y espacios
 */
function validarNombre()
{
	nombre=document.getElementById("name").value;


	if(nombre!=="")
	{
		//Solo letras y espacios
		var letras= new RegExp("^[a-zA-ZÁÉÍÓÚáéíóúñÑ ]*$");
		if (letras.test(nombre)) {

			document.getElementById("name").style.backgroundColor="ddffb0";
			nombreValido=true;
			actualizar=1;
			document.getElementById("errorName").innerHTML = " ";

		} else {
			document.getElementById("name").style.backgroundColor="ffb0b0";
			nombreValido=false;
			document.getElementById("name").focus();
			document.getElementById("errorName").innerHTML = "Este campo solo admite letras,por favor,inténtelo de nuevo";

		}


	}else{
		document.getElementById("name").style.backgroundColor="ffb0b0";
		nombreValido=false;
		document.getElementById("name").focus();
		document.getElementById("errorName").innerHTML = "Campo obligatorio,por favor,inténtelo de nuevo";
	}
}

/**
 * Validar campo apellido Formulario
 * no admite números solo Letras y Espacios
 */
function validarApellido()
{
	apellidos=document.getElementById("surname").value;
	if(apellidos!=="")
	{
		//Solo letras y espacios
		var letras = new RegExp("^[a-zA-ZÁÉÍÓÚáéíóúñÑ ]*$");
		if (letras.test(apellidos)) {

			document.getElementById("surname").style.backgroundColor = "ddffb0";
			apellidoValido=true;
			actualizar=1;
			document.getElementById("errorSurname").innerHTML = " ";
		} else {
			document.getElementById("surname").style.backgroundColor = "ffb0b0";
			apellidoValido=false;
			document.getElementById("surname").focus();
			document.getElementById("errorSurname").innerHTML = "Este campo solo admite letras,por favor,inténtelo de nuevo";

		}
	}else{
		document.getElementById("surname").style.backgroundColor="ffb0b0";
		apellidoValido=false;
		document.getElementById("surname").focus();
		document.getElementById("errorSurname").innerHTML = "Campo obligatorio,por favor,inténtelo de nuevo";
	}
}

/**
 * Comprueba Campos vacios y digitos validos de telefonos
 * números validos comendazos en 6,7 o 9
 * longitud 9
 * */
function validarTelefono()
{

	telefono=document.getElementById("phone").value;
	expresionregulartelefono=new RegExp(/^[6-7-9]{1}[0-9]{8}$/);
	if(expresionregulartelefono.test(telefono))
	{
		document.getElementById("phone").style.backgroundColor="ddffb0";
		telefonovalido=true;
		actualizar=1;
		document.getElementById("errorTlf").innerHTML = " ";

	}
	else
	{
		document.getElementById("phone").style.backgroundColor="ffb0b0";
		telefonovalido=false;
		document.getElementById("phone").focus();
		document.getElementById("errorTlf").innerHTML =  "Error dígitos incorrecto o vacío,por favor,intenteló de nuevo";
	}

}

/**
 * Comprueba si el campo esta vacio y el tipo de datos introducid
 * números validos comendazos en 6,7 o 9
 * longitud 9
 * */
function validarPrecio()
{
	precio=document.getElementById("price").value;
	expresionRegularPrecio=new RegExp("^[0-9.]*$");
	if(expresionRegularPrecio.test(precio))
	{
		document.getElementById("price").style.backgroundColor="ddffb0";
		precioValido=true;
		actualizar=1;
		document.getElementById("errorPrice").innerHTML = " ";

	}
	else
	{
		precio=document.getElementById("price").value;
		precioValido=false;
		document.getElementById("price").focus();
		document.getElementById("errorPrice").innerHTML =  "Error dígitos incorrecto o vacío,por favor,intenteló de nuevo";
	}

}

/**
 * Validar DNI introducido
 * comprueba campo DNI
 * comprueba longitud
 * calcula el número introducido para obtener su letra
 * se compara las letras
 * Si todo es correcto comprueba si el DNI está ya registrado en la BBDD
 */
function validarDNI()
{

	dni = document.getElementById("DNI").value.toUpperCase();
	expresionregulardni=new RegExp(/^[0-9]{8}[A-Z]{1}$/);

	if(expresionregulardni.test(dni))
	{

		//Se separan los números de la letra
		var letraDNI = dni.substring(8, 9).toUpperCase();
		var numDNI = parseInt(dni.substring(0, 8));

		//Se calcula la letra correspondiente al número
		var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
		var letraCorrecta = letras[numDNI % 23];

		if (letraDNI != letraCorrecta) {
			document.getElementById("DNI").style.backgroundColor="ffb0b0";
			DNIValido=false;
			document.getElementById("DNI").focus();
			document.getElementById("errorDNI").innerHTML =  "Letra incorrecta,por favor,inténtelo de nuevo";
		} else {
			compruebaDNI(dni);
		}
	}
	else
	{
		document.getElementById("DNI").style.backgroundColor="ffb0b0";
		DNIValido=false;
		document.getElementById("errorDNI").innerHTML =  "Error dígitos incorrecto o vacío,por favor,inténtelo de nuevo";
		document.getElementById("DNI").focus();
	}


}

/**
 * Validar DNI introducido
 * comprueba campo DNI
 * comprueba longitud
 * calcula el número introducido para obtener su letra
 * se compara las letras
 */
function validarYComprobarDNI()
{

	dni = document.getElementById("DNI").value.toUpperCase();
	expresionregulardni=new RegExp(/^[0-9]{8}[A-Z]{1}$/);

	if(expresionregulardni.test(dni))
	{

		//Se separan los números de la letra
		var letraDNI = dni.substring(8, 9).toUpperCase();
		var numDNI = parseInt(dni.substring(0, 8));

		//Se calcula la letra correspondiente al número
		var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
		var letraCorrecta = letras[numDNI % 23];

		if (letraDNI != letraCorrecta) {
			document.getElementById("DNI").style.backgroundColor="ffb0b0";
			DNIValido=false;
			document.getElementById("DNI").focus();
			document.getElementById("errorDNI").innerHTML =  "Letra incorrecta,por favor,inténtelo de nuevo";
		} else {
			document.getElementById("errorDNI").innerHTML =  " ";
			DNIValido=true;
		}
	}
	else
	{
		document.getElementById("DNI").style.backgroundColor="ffb0b0";
		DNIValido=false;
		document.getElementById("errorDNI").innerHTML =  "Error dígitos incorrecto o vacío,por favor,inténtelo de nuevo";
		document.getElementById("DNI").focus();
	}


}

/**
 * Valida que el input colegiado no este vacío
 */
function validarNumColegiado()
{
	numColegiado=document.getElementById("colegiado").value;
	if(numColegiado!=="")
	{
		//Solo admite numeros
		var numerosColegiado= new RegExp("^[0-9,$]*$");
		if (numerosColegiado.test(numColegiado)) {

			document.getElementById("colegiado").style.backgroundColor="ddffb0";
			numeroColegiadoValido=true;
			document.getElementById("errorColegiado").innerHTML = " ";

		} else {
			document.getElementById("colegiado").style.backgroundColor="ffb0b0";
			document.getElementById("colegiado").focus();
			numeroColegiadoValido=false;
			document.getElementById("errorColegiado").innerHTML = "Este campo solo admite números,por favor,inténtelo de nuevo";

		}

	}else{
		document.getElementById("colegiado").style.backgroundColor="ffb0b0";
		document.getElementById("colegiado").focus();
		numeroColegiadoValido=false;
		document.getElementById("errorColegiado").innerHTML = "Campo obligatorio,por favor,inténtelo de nuevo";
	}
}

/**
 * Validar campo Texto
 * no admite campo vacio
 */
function validarTexto()
{
	texto=document.getElementById("texto").value;


	if(texto!=="")
	{
			textoValido=true;
			document.getElementById("errorText").innerHTML = " ";
			actualizar=1;

	}else{
		document.getElementById("texto").style.backgroundColor="ffb0b0";
		textoValido=false;
		document.getElementById("texto").focus();
		document.getElementById("errorText").innerHTML = "Campo obligatorio,por favor,inténtelo de nuevo";
	}
}

/**
 * valida la estructura del correo introducido sea valido
 */
function validarCorreo()
{

	var correo = document.getElementById("mail").value;

	expresionregularcorreoelectronico = new RegExp(/^[^@]+@[^@]+\.[A-Za-z]{2,}$/);
	if (expresionregularcorreoelectronico.test(correo))
	 {
		 compruebaEmail(correo);

	 }else {
		document.getElementById("mail").style.backgroundColor = "ffb0b0";
		emailvalido=false;
		document.getElementById("mail").focus();
		document.getElementById("errorMail").innerHTML = "El correo introducido no es válido,inténtelo de nuevo. ";
			}

}

/**
 * Compara que los campos contraseñas coincidan
 */
function contraseniaValida()
{
	var contra1=document.getElementById("password").value;
	var contra2=document.getElementById("password2").value;

	if(contra1!="" && contra2!=""  && contra1 === contra2)
	{
		document.getElementById("password").style.backgroundColor = "ddffb0";
		document.getElementById("password2").style.backgroundColor = "ddffb0";
		contrasenaValida=true;
		document.getElementById("errorContrasenia").innerHTML = " ";

		psw=1;
	}else{
		document.getElementById("password").style.backgroundColor = "ffb0b0";
		document.getElementById("password").focus();
		contrasenaValida=false;
		document.getElementById("password2").style.backgroundColor = "ffb0b0";
		document.getElementById("errorContrasenia").innerHTML = "Las contraseñas no coinciden.";

	}
}

/**
 *Valida el campo porcentae no admite letras solo enteros de 0 a 9
 */
function validarPorcentaje()
{
	porcentaje=document.getElementById("porcentaje").value;
	if(porcentaje!=="")
	{
		//Solo admite numeros
		var numeros= new RegExp("^[0-9,$]*$");
		if (numeros.test(porcentaje)) {

			document.getElementById("errorPorcentaje").innerHTML = " ";
			porcentajeValido=true;

		} else {
			document.getElementById("porcentaje").focus();
			porcentajeValido=false;
			document.getElementById("errorPorcentaje").innerHTML = "Este campo solo admite números,por favor,inténtelo de nuevo";

		}


	}else{
		document.getElementById("porcentaje").focus();
		porcentajeValido=false;
		document.getElementById("errorPorcentae").innerHTML = " IVA  campo vacío";
	}
}

/**
 * LLama al controlador comprobarDNI() enviado el correo introducido
 * obtiene 0 -> DNI disponible 1-> DNI ya registrado
 * @param DNI
 */
function compruebaDNI(DNI)
{
	$.ajax({
		url: 'comprobarDNI',//ruta del archivo donte estara la consulta a la bd
		type: 'POST',
		cache: false,
		data: "DNI=" + DNI,
		success: function (resultado) {

			if(resultado==0){
				document.getElementById("DNI").style.backgroundColor="ddffb0";
				DNIValido=true;
				document.getElementById("errorDNI").innerHTML = " ";
			}else{
				document.getElementById("DNI").style.backgroundColor =  "ffb0b0";
				DNIValido=false;
				document.getElementById("DNI").focus();
				document.getElementById("errorDNI").innerHTML = "Este DNI ya está registado!Por favor,introduce otro DNI. ";
			}

		}
	});


}

/**
 * LLama al controlador comprobarCorreo() enviado el correo introducido
 * obtiene 0 -> correo disponible 1-> correo ya registrado
 * @param correo
 */
function compruebaEmail(correo)
{
	$.ajax({
		url: 'comprobarMail',//ruta del archivo donte estara la consulta a la bd
		type: 'POST',
		cache: false,
		data: "mail=" + correo,
		success: function (resultado) {

			if(resultado==0){
				document.getElementById("mail").style.backgroundColor = "ddffb0";
				emailvalido = true;
				actualizar=1;
				document.getElementById("errorMail").innerHTML = " ";
			}else{
				document.getElementById("mail").style.backgroundColor = "ffb0b0";
				emailvalido=false;
				document.getElementById("mail").focus();
				document.getElementById("errorMail").innerHTML = "Este correo ya está registado!Por favor,introduce otro correo ";
			}

		}
	});
}

/*Presupuesto*/
/**
 * Comprueba que el dato introducido es valido y si es correcto
 * envia la información del formulario
 */
function localizarIDPaciente(){
	if (DNIValido) {

		document.getElementById("seleccionarUsuario").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}

function altaPresupuesto(){
	if (nombreValido && textoValido) {

		document.getElementById("AltaPresupuesto").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}
/**
 * Muestra el panel con las pruebas para asignar al presupuesto
 * si el usuario selecciona el tipo prueba a la hora de dar de alta
 * al presupuesto.
 */
function mostrarOpcionesPruebas()
{
	document.getElementById('listadoPruebas').style.display='-webkit-box';
	document.getElementById('listadoTratamiento').style.display='none';
	document.getElementById('piezaDental').style.display='none';

}

/**
 * Muestra el panel con las opciones de tratamientos y las piezas dentales
 * donde se realiza el tratamiento a la hora de realizar el presupuesto.
 */
function mostrarOpcionesTratamientos()
{
	document.getElementById('listadoPruebas').style.display='none';
	document.getElementById('listadoTratamiento').style.display='-webkit-box';
	document.getElementById('piezaDental').style.display='-webkit-box';

}
