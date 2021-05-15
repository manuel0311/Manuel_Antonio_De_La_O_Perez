//SCRIPT PARA QUE FUNCIONEN DETERMINADOS COMPONENTES PARA BOOTSTRAP
$(function () {
	//Habilita los tooltips
	//.tooltip("toggle")	Alterna la información sobre herramientas
	$('[data-toggle="tooltip"]').tooltip({
		container: 'body'
	});
});
