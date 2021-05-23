<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class C_Users
 */
class C_Users extends CI_Controller
{
	/**
	 * @author :Manuel Antonio De La O Pérez
	 */

	/**
	 * C_users constructor.
	 * LLama al constructor
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_usuarios', 'm_usuarios');
		// Carga la libreria session
		$this->load->library('session');


	}


	/*Gestión Administrador*/


	/**
	 * LLama a las vistas del index Administrador
	 */
	public function principalAdministrador()
	{
		/**
		 * Si existe la sesión comprueba que el usuario es de tipo Administrador (a) o EmpleadoAdministrador(ea)
		 * en caso contrario redirige al usuario a la pantalla principal.
		 */
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				//carga el menu
				$this->load->view('V_Admin/menuAdmin');
				//Carga la vista index
				$this->load->view("V_Admin/indexAdmin");
				//Carga Footer
				$this->load->view("footer");

			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}

	/**
	 * Formulario Para Enviar y buscar Empleado
	 */
	public function buscarEmpleado(){
		/*if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {*/
				//carga el menu
				$this->load->view('V_Admin/menuAdmin');
				//Carga la vista index
				$this->load->view("V_Admin/BuscarTrabajadores");
				//Carga Footer
				$this->load->view("footer");

		/*	} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}*/
	}

	/**
	 *
	 */
	public function addTratamientoPrueba(){
		/*if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				if(isset($_POST['porcentaje'])){

					$this->addNuevoIVA();
				}else{*/

					//carga el menu
					$this->load->view('V_Admin/menuAdmin');
					//Carga la vista index
					$this->load->view("V_Admin/addTrataminetoPrueba");
					//Carga Footer
					$this->load->view("footer");
				/*}


			} else {
				redirect("principal");
			}*/

	}
	/**
	 * LLama a las vistas que forman la página Modificar IVA
	 */
	public function modificarIVA(){
		/**
		 * Si existe la sesión comprueba que el usuario es de tipo Administrador (a) o EmpleadoAdministrador(ea)
		 * en caso contrario redirige al usuario a la pantalla principal.
		 */
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				if(isset($_POST['porcentaje'])){

					$this->addNuevoIVA();
				}else{

					//carga el menu
					$this->load->view('V_Admin/menuAdmin');
					//Carga la vista index
					$this->load->view("V_Admin/ModificarIVA");
					//Carga Footer
					$this->load->view("footer");
				}


			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}

	/*Añade el nuevo IVA a la BBDD*/
	public function addNuevoIVA(){

		if($this->m_usuarios->actualizarIVA()>0)
		{
			$mensaje=array('texto'=>"Cambio realizado con exito");
			//carga el menu
			$this->load->view('V_Admin/menuAdmin');
			//Carga la vista index
			$this->load->view("V_Admin/ModificarIVA",$mensaje);
			//Carga Footer
			$this->load->view("footer");

		}

	}

	/**
	 * Muestra los datos del usuario que inicio sesión
	 */
	public function mostrarDatos(){

		if(isset($_SESSION['tipo'])){
			$datos=$this->m_usuarios->obtenerDatosUsuario();

			//carga el menu
			$this->selecionarMenu();
			//Carga la vista index
			if($_SESSION['tipo']=='a'){
				$this->load->view("V_Admin/verDatosAdmin",$datos);
			}else if($_SESSION['tipo']=='e'){
				$this->load->view("V_Trabajador/verDatoEmpleado",$datos);
			}else if($_SESSION['tipo']=='p'){
				$this->load->view("V_Paciente/verDatosPaciente",$datos);
			}
			//Carga Footer
			$this->load->view("footer");
		}else{
			redirect("principal");
		}

	}

	/**
	 * Actualiza los datos enviados
	 */
	public function actualizarDatosUsuario()
	{
		if(isset($_SESSION['tipo']))
		{
			if ($this->m_usuarios->actualiarDatos() > 0) {
				$this->mostrarDatos();
			} else {
				redirect("principal");
			}
		}
	}


	/**
	 * Funcion validar registros del formulario Empleado
	 */
	public function formularioEmpleado()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
		//Carga el menu Administrador
		$this->load->view('V_Admin/menuAdmin');
		//Carga Formulario Registro
		$this->load->view('V_Admin/RegistroTrabajador');
		//Carga Footer
		$this->load->view("footer");
			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}

	/**
	 * Registra los datos del formulario Empleado a la base de datos
	 * y devuelve el mensaje si se hizo un insert correcto o no.
	 */
	public function envioDatosTrabajador()
	{
		$mensaje = array("texto" => $this->m_usuarios->addUsuarios());
		//Carga el menu Administrador
		$this->load->view('V_Admin/menuAdmin');
		//Carga Formulario Registro
		$this->load->view('V_Admin/RegistroTrabajador', $mensaje);
		//Carga Footer
		$this->load->view("footer");
	}

	/*Gestión Empleado*/

	/**
	 * LLama a las vistas del index Administrador
	 */
	public function principalEmpleado()
	{
		/**
		 * Si existe la sesión comprueba que el usuario es de tipo Empleado(e) o EmpleadoAdministrador(ea)
		 * en caso contrario redirige al usuario a la pantalla principal.
		 */
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'e' || $_SESSION["tipo"] == 'ea') {
				//carga el menu
				$this->load->view('V_Trabajador/menuTrabajador');
				//Carga la vista index
				$this->load->view('V_Trabajador/indexTrabajador');
				//Carga Footer
				$this->load->view("footer");

			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}

	/**
	 * Funcion validar registros del formulario Empleado
	 */
	public function formularioPaciente()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] =='e' || $_SESSION["tipo"] == 'ea') {
				//Carga el menu Administrador
				$this->load->view('V_Trabajador/menuTrabajador');
				//Carga Formulario Registro
				$this->load->view('V_Trabajador/RegistroPaciente');
				//Carga Footer
				$this->load->view("footer");
			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}

	/**
	 * Registra los datos del formulario Paciente a la base de datos
	 * y devuelve el mensaje si se hizo un insert correcto o no.
	 */
	public function envioDatosPaciente()
	{
		$mensaje = array("texto" => $this->m_usuarios->addUsuarios());
		//Carga el menu Administrador
		$this->load->view('V_Trabajador/menuTrabajador');
		//Carga Formulario Registro
		$this->load->view('V_Trabajador/RegistroPaciente', $mensaje);
		//Carga Footer
		$this->load->view("footer");
	}

	/*Gestión Paciente*/

	/**
	 * LLlama a las vistas que forman la página principal de los pacientes
	 */
	public function principalPacientes()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
				//carga el menu
				$this->load->view('V_Paciente/menuPaciente');
				//Carga la vista index
				$this->load->view('V_Paciente/indexPaciente');
				//Carga Footer
				$this->load->view("footer");

			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}

	/*Comprobaciones*/

	/**
	 * Comprueba el correo introducido y devuelve
	 * 0 -> Email no registrado
	 * 1 -> Email registrado en la BBDD
	 */
	public function comprobarCorreo()
	{

		if ($this->m_usuarios->comprobarlMailexistente() > 0) {
			echo json_encode(1);
		} else {
			echo json_encode(0);
		}
	}

	/**
	 * Comprueba el DNI introducido y devuelve
	 * 0-> DNI no registrado
	 * 1 -> DNI registrado
	 */
	public function comprobarDNI()
	{
		if ($this->m_usuarios->comprobarDNIexistente() > 0) {
			echo json_encode(1);
		} else {
			echo json_encode(0);
		}
	}

	/**
	 * Cambia el menu del usuario dependiendo del tipo de Usuario
	 */
   public function selecionarMenu()
   {
		if($_SESSION['tipo']=='a'){
			$this->load->view('V_Admin/menuAdmin');
		}else if($_SESSION['tipo']=='e')
		{
			$this->load->view('V_Trabajador/menuTrabajador');
		}else {
			$this->load->view('V_Paciente/menuPaciente');
		}
   }


}

