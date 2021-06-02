<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class C_Home
 */
class C_Home extends CI_Controller
{
	/**
	 * @author :Manuel Antonio De La O Pérez
	 */

	
	/**
	 * C_Home constructor.
	 */
	function __construct()
	{
		parent::__construct();
		//Carga Modelo Usuarios
		$this->load->model("M_usuarios","M_usuarios");
		//Carga Modelo Instalación
		$this->load->model("M_Instalacion","m_instalacion");
		/*Helper cookie*/
		$this->load->helper('cookie');
		// Carga la libreria session
		$this->load->library('session');
		$this->load->helper('url');

	}

	/**
	 * Comprueba que la base de datos tiene tablas ,si es afirmativo
	 * llama a la vista V_Principal , en caso contrario, no muestra nada.
	 */
	public function index()
	{
		/*Si la tabla Usuarios existe , llama a la vista Principal*/
		if($this->m_instalacion->comprobarTabla() == 1){
			if($this->m_instalacion->comprobarAdministrador()>0){

				$this->Principal();
			}


		}

	}

	//Métodos de instalación

	/**
	 * llama la vista con la presentación de la instalación de la
	 * aplicacción web .
	 */
	public function Instalacion()
	{
		if($this->m_instalacion->comprobarTabla() == 1){
			if($this->m_instalacion->comprobarAdministrador()>0){
				$this->loginAdmin();
			}else{
				$this->CrearAdministrador();
			}
		} else{
			/*Comprueba la conexión con el servidor antes de realizar  la instalación de la aplicación*/
			if($this->db->db_pconnect()){
				$this->load->view("V_Instalacion/Paso_1");
			}else {
				echo "<h1>Error Interno, por favor,intentelo de nuevo pasado unos minutos.</h1>
					  <p>Disculpen las molestias</p>";
			}

		}


	}

	/**
	 * Formulario Registro Administrador Aplicación
	 *
	 */
	public function CrearAdministrador()
	{
		/*Comrpruebo que existen tablas en la bbdd.
		1- tiene tablas
		0- sin tablas
		*/
		if($this->m_instalacion->comprobarTabla() == 0){
		/*Crea las tablas de la BBDD*/
			$this->m_instalacion->importarScript();
		/*lama a la vista con el formulario para el registro administrador*/
			$this->load->view("V_Instalacion/Paso_2");
		}else{
			/*Compruebo que existe algun usuario ,
			1 - Existe - LLamo a la vista Login Administrador
			0 - LLama a la vista con el formulario para añadir al administrador*/
			if($this->m_instalacion->comprobarAdministrador()>0 ){
				$this->loginAdmin();
			}else{
				$this->load->view("V_Instalacion/Paso_2");
			}

		}

	}

	/**
	 * Recoge los datos del formulario del metodo CrearAdministrador
	 * Instala el script de la base de datos
	 * Agrega la información del administrador
	 * y mustra la vista con el paso 3 de la instalación
	 */
	public function addDatosBBDD()
	{
		if($this->m_instalacion->comprobarTabla()>0){
				if($this->m_instalacion->comprobarAdministrador() == 0 ){
					$this->m_instalacion->registroAdministrador();
					$this->formularioIva();
				}else{
					$this->load->view("V_Instalacion/Paso_2");
				}

		}else{
			$this->loginAdmin();
		}


	}

	/*Muestra Formulario Iva*/
	/**
	 *
	 */
	public function formularioIva(){
		$this->load->view("V_Instalacion/Paso_3");
	}

	/**
	 * Asignar Iva
	 * Comprueba Que las tablas estén añadadidas a la tabla
	 * comprueba que disponga de algun usuario registrado
	 * si es todo correcto añade el porcentaje a la bbdd y muestra la página principal
	 */
	public function addIVA(){

		if($this->m_instalacion->comprobarTabla()>0){
			if($this->m_instalacion->comprobarAdministrador() == 0 ){
				$this->CrearAdministrador();
			}else{
				if($this->m_instalacion-> comprobarIVA() == 0 ){
					$this->m_instalacion->addIVA();
					$this->Principal();
				}
			}

		}else{
			$this->loginAdmin();
		}

	}

	/*Panel Administración*/
	/**
	 * Llama a la vista con el formulario para acceder al panel de Administración
	 * de la aplicación.
	 */
	public function loginAdmin()
	{
		if(isset($_SESSION["tipo"])){
			if($_SESSION["tipo"]=='a' || $_SESSION["tipo"]=='ea'){
				redirect("administrador");
			}else{
				redirect("principal");
			}

		}else{
			$this->load->view('V_Admin/Login');
		}


	}
	//Métodos Páginas Aplicación


	/*Menu Principal*/
	public function menuPrincipal(){
		if(isset($_SESSION["tipo"])){
			//carga el menu con sesión inicidada
			$this->load->view('menu/menu_sesion');
		}else{
			//carga el menu sin sesión inicidada
			$this->load->view('menu/menu_sinsesion');

		}
	}

	/**
	 * Página principal (Index con BBDD instalada)
	 */
	public function Principal()
	{
		$this->menuPrincipal();
		//Carga Alerta Cookies
		$this->load->view('Alert_Cookies');
		//Carga la vista index
		$this->load->view("Index");
		//Carga Footer
		$this->load->view("footer");
		//Carga botón whatsapp
		$this->load->view("V_Principal/BT_Whatsapp");
	}

	/**
	 * Llama a la vista que contiene la parte de la
	 */
	public function servicio()
	{
		//carga el menu
		$this->menuPrincipal();
		//Carga Alerta Cookies
		$this->load->view('Alert_Cookies');
		//Carga la vista Servicio
		$this->load->view("V_Principal/servicio");
		//Carga botón whatsapp
		$this->load->view("V_Principal/BT_Whatsapp");
		//Carga Footer
		$this->load->view("footer");
	}

	/**
	 * LLama a la vista que contiene la parte de la web "Nosotros"
	 */
	public function nosotros()
	{
		//carga el menu
		$this->menuPrincipal();
		//Carga Alerta Cookies
		$this->load->view('Alert_Cookies');
		//Carga la vista Nosotros
		$this->load->view("V_Principal/Nosotros");
		//Carga Footer
		$this->load->view("footer");
		//Carga botón whatsapp
		$this->load->view("V_Principal/BT_Whatsapp");

	}


	/*Llama a la vista Contacto*/
	public function contacto()
	{
		//carga el menu
		$this->menuPrincipal();
		//Carga Alerta Cookies
		$this->load->view('Alert_Cookies');
		//Carga la vista Contacto
		$this->load->view("V_Principal/contacto");
		//Carga Footer
		$this->load->view("footer");
		//Carga botón whatsapp
		$this->load->view("V_Principal/BT_Whatsapp");
	}

	/*Politicas legales*/

	//Aviso Legal
	public function legal()
	{
		//carga el menu
		$this->menuPrincipal();
		//Carga la vista Contacto
		$this->load->view('legal/aviso_legal');
	}

	//Politica Privacidad
	public function privacidad()
	{
		//carga el menu
		$this->menuPrincipal();
		//Carga la vista Contacto
		$this->load->view('legal/privacidad');
	}

	//Política de Cookies
	public function Pcookies()
	{
		//carga el menu
		$this->menuPrincipal();
		//Carga la vista Contacto
		$this->load->view('legal/cookies');
	}


}
