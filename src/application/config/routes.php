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
$route['Higea_Admin']='C_Home/loginAdmin';
$route['Paso_tres']='C_Home/addDatosBBDD';
$route['principal'] ='C_Home/Principal';
$route['tratamientos']='C_Home/servicio';
$route['Higea_nosotros']='C_Home/nosotros';
$route['contacto']='C_Home/contacto';
$route['Aviso_Legal']='C_Home/legal';
$route['Politica_Privacidad']='C_Home/privacidad';
$route['Politica_Cookies']='C_Home/Pcookies';
$route['CI_Admin']='C_Config/instalar';
$route['registroEmpleado']='C_users/formularioEmpleado';
$route['registroPaciente']='C_users/formularioPaciente';
$route['envioDatosTrabajador']='C_users/envioDatosTrabajador';
$route['Instalacion']='C_Home/Instalacion';
$route['paso_dos']='C_Home/CrearAdministrador';
$route['completo']='C_Home/addIVA';




