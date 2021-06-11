/*Comprueba los datos de la cookie generada*/
function GetCookie(name) {
	var arg=name+"=";
	var alen=arg.length;
	var clen=document.cookie.length;
	var i=0;
	while (i<clen) {
		var j=i+alen;

		if (document.cookie.substring(i,j)==arg)
			return "1";
		i=document.cookie.indexOf(" ",i)+1;
		if (i==0)
			break;
	}

	return null;
}

/**
 * Creación cookie
 */
function aceptar_cookies(){
	var expire=new Date();
	expire=new Date(expire.getTime()+7776000000);
	document.cookie="cookies_informacion=aceptada; expires="+expire;

	var visit=GetCookie("cookies_informacion");
	if (visit==1){
		popbox3();
	}
}

/*Comprueba las cookies */
jQuery(function() {
	var visit=GetCookie("cookies_surestao");
	if (visit==1){
		$('#overbox3').toggle();
	} else {
		var expire=new Date();
		expire=new Date(expire.getTime()+7776000000);
		document.cookie="cookies_surestao=aceptada; expires="+expire;
	}

});

function popbox3() {
	$('#overbox3').toggle();
}


