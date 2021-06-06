<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Sesiones extends CI_Controller
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

		//Carga el modelo Usuarios
		$this->load->model('M_usuarios', 'm_usuarios');
		/*Helper cookie*/
		$this->load->helper('cookie');
		// Carga la libreria session
		$this->load->library('session');
		$this->load->helper('url');



	}

	public function Login(){
		if($this->m_usuarios->comprobarlMailexistente()>0){
			$datos=$this->m_usuarios->datosUsuario();
			if(strtolower($_POST["mail"]) == strtolower($datos["email"]) && password_verify($_POST["psw"],$datos["contrasenia"]))
			{
				$datos=array(
					"id"=>$datos["idUsuario"],
					"resetPsw"=>$datos["restablecerContrasenia"],
					"tipo"=>$datos["tipo"]
					);

				$this->session->set_userdata($datos);
				$this->opcionesPanel();
				//redirect("principal");
			}else{
				$mensaje=array("texto"=>"Correo o contraseña incorrecta.");
				//carga el menu
				$this->load->view('menu/menu_sinsesion',$mensaje);
				//Carga Alerta Cookies
				$this->load->view('Alert_Cookies');
				//Carga la vista index
				$this->load->view("Index");
				//Carga Footer
				$this->load->view("footer");
				//Carga botón whatsapp
				$this->load->view("V_Principal/BT_Whatsapp");
			}

		}else{
			$mensaje=array("texto"=>"Correo o contraseña incorrecta.");
				//carga el menu
			$this->load->view('menu/menu_sinsesion',$mensaje);
			//Carga Alerta Cookies
			$this->load->view('Alert_Cookies');
			//Carga la vista index
			$this->load->view("Index");
			//Carga Footer
			$this->load->view("footer");
			//Carga botón whatsapp
			$this->load->view("V_Principal/BT_Whatsapp");
		}

	}

	public function LoginAdmin(){
		if($this->m_usuarios->comprobarlMailexistente()>0){
			$datos=$this->m_usuarios->datosUsuario();
			if(strtolower($_POST["mail"]) == strtolower($datos["email"])  && password_verify($_POST["psw"],$datos["contrasenia"]))
			{
				$datos=array(
					"id"=>$datos["idUsuario"],
					"resetPsw"=>$datos["restablecerContrasenia"],
					"tipo"=>$datos["tipo"]
				);

				$this->session->set_userdata($datos);
				$this->opcionesLoginAdmin();

			}else{
				$mensaje=array("texto"=>"Correo o contraseña incorrecta.");
				 //carga la vista Login
				$this->load->view('V_Admin/Login',$mensaje);
			}

		}else{
			$mensaje=array("texto"=>"Correo o contraseña incorrecta.");
			//carga la vista Login
			$this->load->view('V_Admin/Login',$mensaje);
		}

	}
	public function opcionesLoginAdmin(){

		if($_SESSION["tipo"]=='a' || $_SESSION["tipo"]=='ea'){
			redirect("administrador");
		}else{
			redirect("principal");
		}
	}

	public function cerrarSesion(){

		$this->session->sess_destroy();
		redirect("principal");
	}

	/**
	 * Comprobar Tipo de panel Usuario
	 */
	public function opcionesPanel()
	{
		if(isset($_SESSION["tipo"])){
			if($_SESSION["tipo"]=='a' || $_SESSION["tipo"]=='ea'){
				redirect("administrador");
			}else if($_SESSION["tipo"]=='e'){
				redirect("empleados");
			}else if($_SESSION["tipo"]=='p'){
				redirect("pacientes");
			}
		}else{
			redirect("principal");
		}
	}


	/**
	 * Vista Panel Empleado
	 */
	public function panelEmpleado()
	{

		/**
		 * Si existe la sesión comprueba que el usuario es de tipo Empleado (e) o EmpleadoAdministrador(ea)
		 * en caso contrario redirige al usuario a la pantalla principal.
		 */
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] = 'e' || $_SESSION["tipo"] = 'ea') {
				//carga el menu
				$this->load->view('V_Trabajador/menuTrabajador');
				//Carga Alerta Cookies
				$this->load->view('Alert_Cookies');
				//Carga la vista index
				$this->load->view("V_Trabajador/indexTrabajador");
				//Carga Footer
				$this->load->view("footer");
				//Carga botón whatsapp
				$this->load->view("V_Principal/BT_Whatsapp");
			}else{
				   redirect("principal");
				 }
		}else{
			redirect("principal");
		}
	}



}
