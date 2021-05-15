<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$this->load->model("M_usuarios","M_usuarios");
		$this->load->model("M_Instalacion","M_Instalacion");
	}

	/**
	 * Comprueba que la base de datos tiene tablas ,si es afirmativo
	 * llama a la vista V_Principal , en caso contrario, no muestra nada.
	 */
	public function index()
	{
		/*Si la tabla Usuarios existe , llama a la vista Principal*/
		if($this->M_Instalacion->comprobarTabla() == 1){
			$this->Principal();
		}else{

		}

	}

	//Métodos de instalación

	/**
	 * llama la vista con la presentación de la instalación de la
	 * aplicacción web .
	 */
	public function Instalacion()
	{
		if($this->M_Instalacion->comprobarTabla() == 1){{
		}
			$this->loginAdmin();
		}else{
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
		if(isset($_GET["activo"])){
			$this->load->view("V_Instalacion/Paso_2");
		}else{
			$this->Principal();
		}

	}

	/**
	 * Recoge los datos del formulario del metodo CrearAdministrador
	 * Instala el script de la base de datos
	 * Agrega la información del administrador
	 * y mustra la vista con el paso 3 de la instalación
	 */
	public function addBBDD()
	{

		if(isset($_POST['enviar'])){
			$this->M_Instalacion->importarScript();

			if($this->M_Instalacion->registroAdministrador()>0){

				$this->formularioIva();
			}
		}else{
			$this->Principal();
		}


	}

	/*Muestra Formulario Iva*/
	public function formularioIva(){
		$this->load->view("V_Instalacion/Paso_3");
	}

	/**
	 * Asignar Iva
	 */
	public function addIVA(){
		if(isset($_POST['finalizar']))
		{

		}

	}

	/*Panel Administración*/
	/**
	 * Llama a la vista con el formulario para acceder al panel de Administración
	 * de la aplicación.
	 */
	public function loginAdmin()
	{
		$this->load->view('V_Admin/Login');

	}
	//Métodos Páginas Aplicación
	/**
	 * Página principal (Index con BBDD instalada)
	 */
	public function Principal()
	{
		//carga el menu
		$this->load->view('menu/menu_sinsesion');
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
		$this->load->view('menu/menu_sinsesion');
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
		$this->load->view('menu/menu_Sinsesion');
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
		$this->load->view('menu/menu_Sinsesion');
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
		$this->load->view('menu/menu_Sinsesion');
		//Carga la vista Contacto
		$this->load->view('legal/aviso_legal');
	}

	//Politica Privacidad
	public function privacidad()
	{
		//carga el menu
		$this->load->view('menu/menu_Sinsesion');
		//Carga la vista Contacto
		$this->load->view('legal/privacidad');
	}

	//Política de Cookies
	public function Pcookies()
	{
		//carga el menu
		$this->load->view('menu/menu_Sinsesion');
		//Carga la vista Contacto
		$this->load->view('legal/cookies');
	}
}
