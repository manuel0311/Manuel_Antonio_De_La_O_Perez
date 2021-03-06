<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/*Abre por defecto*/
$route['default_controller'] = 'C_Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/*Página Principal*/
$route['Higea_Admin']='C_Home/loginAdmin';
/*Página instalación aplicación Web*/
$route['Instalacion']='C_Home/Instalacion';
/*Asigna Administrador*/
$route['paso_dos']='C_Home/CrearAdministrador';
/*Muestra formulario IVA*/
$route['Paso_tres']='C_Home/addDatosBBDD';
/*Finaliza la instalación*/
$route['completo']='C_Home/addIVA';
/*Página cambiar el IVA*/
$route['modificarIVA']='C_Users/modificarIVA';
/*Página principal tras la  instalación*/
$route['principal'] ='C_Home/Principal';
/*Pagina tratamientos de la clínica*/
$route['tratamientos']='C_Home/servicio';
/*Muestra la página Higra Dental*/
$route['Higea_nosotros']='C_Home/nosotros';
/*Página contacto clínica*/
$route['contacto']='C_Home/contacto';
/*Página Aviso legal*/
$route['Aviso_Legal']='C_Home/legal';
/*Página politica privacidad*/
$route['Politica_Privacidad']='C_Home/privacidad';
/*Página Politica de Cookies*/
$route['Politica_Cookies']='C_Home/Pcookies';
/*Aceso usuarios*/
$route['login']='C_Sesiones/Login';
/*Página Panel Administración*/
$route['loginAdmin']='C_Sesiones/LoginAdmin';
/*Finaliza la sesión*/
$route['logout']='C_Sesiones/cerrarSesion';
/*Asigna el menu correspondiente al tipo de Usuario*/
$route['opciones']='C_Sesiones/opcionesPanel';
/*Registro empleados*/
$route['registroEmpleado']='C_Users/formularioEmpleado';
/*Registra los datos Empleado*/
$route['envioDatosTrabajador']='C_Users/envioDatosTrabajador';
/*Registro Pacientes*/
$route['registroPaciente']='C_Users/formularioPaciente';
/*Registra los datos Paciente*/
$route['envioDatosPaciente']='C_Users/envioDatosPaciente';
/*Panel Principal Usuarios Empleados*/
$route['empleados']='C_Users/principalEmpleado';
/*Panel Principal Usuarios Administrado*/
$route['administrador']='C_Users/principalAdministrador';
/*Panel principal Usuarios Paciente*/
$route['pacientes']='C_Users/principalPacientes';
/*Comprueba el email introducido está en la BBDD*/
$route['comprobarMail']='C_Users/comprobarCorreo';
/*Compreba el DNI introducido está en la BBDD*/
$route['comprobarDNI']='C_Users/comprobarDNI';
/*Panel busqueda Empleado*/
$route['buscarEmpleado']='C_Users/buscarEmpleado';
/*Muestra los datos del Usuario*/
$route['verDatos']='C_Users/mostrarDatos';
/*Actualizar  Datos*/
$route['actualizar']='C_Users/actualizarDatosUsuario';
/*Añadir nuevo servicio (Tratamiento/Prueba)*/
$route['nuevoServicio']='C_Users/addTratamientoPrueba';
/*Buscar paciente presupuesto*/
$route['seleccionarUsuario']='C_Users/comprobarPaciente';
/*Dar alta presupuesto*/
$route['altaPresupuesto']='C_Users/AltaPresupuesto';
/*Añade los servicios seleccionado del paciente a su presupuesto*/
$route['AddServicioPresupuesto']='C_Users/addServicioPresupuesto';
/*Calcula el total del presupuesto y finalia el presupuesto creado*/
$route['finPresupuesto']='C_Users/finPresupuesto';
/*Solicita el DNI del paciente que desea consultar sus presupuestos.*/
$route['consultarPresupuesto']='C_Users/comprobarPresupuestoPaciente';
/*Activar/desactivar presupuesto paciente*/
$route['presupuestosPaciente']='C_Users/presupuestosPaciente';
/*Consulta el paciente para Eliminar presupuesto paciente*/
$route['ConsultarPresupuestoEliminar']='C_Users/eliminarPresupuestoPaciente';
/*Listado los presupuesto del paciente disponibles para eliminar*/
$route['eliminarPresupuesto']='C_Users/deletepresupuestosPaciente';
/*Consulta los datos del paciente desde el menú empleado*/
$route['consultarPaciente']='C_Users/consultarPaciente';
/*Modifica los datos del paciente desde el menu Empleado*/
$route['actualizarDatosUsuarios']='C_Users/actualizarDatosUsuarios';
/*Elimina los datos del Paciente*/
$route['eliminarPaciente']='C_Users/eliminarPaciente';
/*Lista los servicios asociados al paciente y su estado (pendiente o fecha de realizado)*/
$route['verHistorial']='C_Users/historialPaciente';
/*Lista los presupuestos disponibless del paciente*/
$route['misPresupuestos']='C_Users/listadoPresupuestosPaciente';
/*Lista los presupuesto disponibles para Descargar*/
$route['opcionesPresupuesto']='C_Users/opcionesPresupuestoPaciente';
/*Lista los presupuestos pendientes*/
$route['presupuestosPendientes']='C_Users/listadoPresupuestosPendientes';
/*opciones aceptar o rechazar presupuestos pendientes*/
$route['confirmar']='C_Users/aceptarRechazarPresupuesto';
/*Desarchivar presupuestos paciente*/
$route['desarchivar']='C_Users/desarchivarPaciente';
/*Lista los presupuestos archivados*/
$route['archivados']='C_Users/listadoPresupuestosPacienteArchivados';
/*Muestra el historial del paciente */
$route['Historial']='C_Users/Historial';
/*Muestra los Tratamientos*/
$route['Tratamiento']='C_Users/tratamientos';
/*LLeva a la opción elegida por el usaurio*/
$route['panelTratamiento']='C_Users/opcionesTratamiento';
/*Modifica los datos del tratamiento*/
$route['modificarTratamiento']='C_Users/ModificarTratamientos';
/*Elimina el tratamiento*/
$route['eliminarTratamiento']='C_Users/EliminarTratamiento';
/*Muestra las pruebas*/
$route['Prueba']='C_Users/prueba';
/*LLeva a la opción elegida por el usaurio*/
$route['panelPrueba']='C_Users/opcionesPrueba';
/*Modifica los datos de la Prueba*/
$route['modificarPrueba']='C_Users/ModificarPrueba';
/*Elimina la prueba*/
$route['eliminarPrueba']='C_Users/EliminarPrueba';
/*Muestra los empleados registrados en la clínica dental*/
$route['listadoEmpleado']='C_Users/buscarEmpleado';
/*Muesta los datos del empleado seleccionado*/
$route['empleadoDatos']='C_Users/empleadoDatos';
/*Actualzia los datos del Empleado*/
$route['actualizado']='C_Users/actualizarDato';

$route['cambiarPsw']='C_Users/cambioContrasenia';
