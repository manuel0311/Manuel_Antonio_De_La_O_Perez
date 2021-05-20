/**
 *
 * @author: Manuel Antonio De La O Pérez
 *
 */


/*Variables*/
var emailvalidoLogin=false;
var contrasenia=false;

/**
 * Comprobar datos formulario
 */
function datosLogin(){

	if (emailvalidoLogin && contrasenia) {

		document.getElementById("formLogin").submit();

	} else {

		alert("Compruebe que  todos los campos esten correctamente rellenados y pulse enviar ");
	}
}


function contraseniaVacia(){
	psw=document.getElementById("psw").value;
	if(psw == ""){

		document.getElementById("psw").focus();
		contrasenia=false;
		document.getElementById("errorPSW").innerHTML = "Este campo es obligatorio";
	}else{
		document.getElementById("errorPSW").innerHTML = "";
		contrasenia=true;
	}


}
/**
 * valida la estructura del correo introducido
 */
function correovalidoLogin()
{

	var correo = document.getElementById("mail").value;
	expresionregularcorreoelectronico = new RegExp(/^[^@]+@[^@]+\.[A-Za-z]{2,}$/);
	if (expresionregularcorreoelectronico.test(correo)) {
		document.getElementById("errorMail").innerHTML = " ";
		emailvalidoLogin=true;

	} else {

		document.getElementById("mail").focus();
		emailvalidoLogin=false;
		document.getElementById("errorMail").innerHTML = "El correo introducido no es válido,inténtelo de nuevo. ";
	}
}




