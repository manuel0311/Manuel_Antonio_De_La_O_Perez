/**
 *
 * @author: Manuel Antonio De La O Pérez
 *
 */


/**
 * Comprueba que el input name (Nombre) no este vacío
 */
var nombreValido=false;
var apellidoValido=false;
var telefonovalido=false;
var DNIValido=false;
var emailvalido=false;
var contrasenaValida=false;
var IVAValido=false;
var numeroColegiadoValido=false;
var porcentajeValido=false;

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


function validarAddPorcentaje(){
	if (porcentajeValido) {

		document.getElementById("formularioAdministrador").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
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
		var letras= new RegExp("^[a-zA-Z ]+$");
		if (letras.test(nombre)) {

			document.getElementById("name").style.backgroundColor="ddffb0";
			nombreValido=true;
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
		var letras = new RegExp("^[a-zA-Z ]+$");
		if (letras.test(apellidos)) {

			document.getElementById("surname").style.backgroundColor = "ddffb0";
			apellidoValido=true;
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

/*Validar DNI introducido*/
/**
 * comprueba campo DNI
 * comprueba longitud
 * calcula el número introducido para obtener su letra
 * se compara las letras
 */
function validarDNI() {

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
			document.getElementById("DNI").style.backgroundColor="ddffb0";
			DNIValido=true;
			document.getElementById("errorDNI").innerHTML = " ";


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
		document.getElementById("colegiado").style.backgroundColor="ddffb0";
		numeroColegiado=true;
		document.getElementById("errorColegiado").innerHTML = " ";

	}else{
		document.getElementById("colegiado").style.backgroundColor="ffb0b0";
		document.getElementById("colegiado").focus();
		numeroColegiado=true;
		document.getElementById("errorColegiado").innerHTML = "Campo obligatorio,por favor,inténtelo de nuevo";
	}
}

/**
 * valida la estructura del correo introducido sea valido
 */
function validarCorreo()
{

	var correo = document.getElementById("mail").value;
	expresionregularcorreoelectronico = new RegExp(/^[^@]+@[^@]+\.[A-Za-z]{2,}$/);
	if (expresionregularcorreoelectronico.test(correo)) {
		document.getElementById("mail").style.backgroundColor = "ddffb0";
		emailvalido=true;
		document.getElementById("errorMail").innerHTML = " ";


	} else {
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


