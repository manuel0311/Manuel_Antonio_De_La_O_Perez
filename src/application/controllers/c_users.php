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
		/*Helper cookie*/
		$this->load->helper('cookie');
		// Carga la libreria session
		$this->load->library('session');
		$this->load->helper('url');



	}


	/*Opciones Administrador*/


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
	 *Registra  el tupo  servicio seleccionado y su información
	 *  a la base de datos.
	 */
	public function addTratamientoPrueba()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				if (isset($_POST['tipoServicio'])) {

					$this->addServicios();
				} else {

					//carga el menu
					$this->load->view('V_Admin/menuAdmin');
					//Carga la vista index
					$this->load->view("V_Admin/addTrataminetoPrueba");
					//Carga Footer
					$this->load->view("footer");
				}


			} else {
				redirect("principal");
			}

		}
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

	/**
	 * Añade el nuevo IVA a la BBDD
	 */
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
	 *Registra el servicio a la BBDD y muestra el mensaje de añadido con exito
	 */
	public function addServicios(){

			if($this->m_usuarios->insertarServicios()>0)
			{
				$mensaje=array('texto'=>"Servicio Añadido Correctamente");
				//carga el menu
				$this->load->view('V_Admin/menuAdmin');
				//Carga la vista index
				$this->load->view("V_Admin/addTrataminetoPrueba",$mensaje);
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

	/*Opciones Empleado*/

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

	/**
	 * Muestra el formulario para localizar el paciente
	*/
	public function consultarPaciente(){
			if (isset($_SESSION["tipo"])) {
				if ($_SESSION["tipo"]=="e" || $_SESSION["tipo"]=="ea")
				{

					if(isset($_POST['DNI']))
					{
						if($this->m_usuarios->obtenerIDPaciente()>0)
						{
							$this->session->unset_userdata('modificado');
							$this->opcionesPacientes();

						}else{

							$mensaje=array("texto"=>"Usuario no encontrado");
							//Carga el menu Administrador
							$this->load->view('V_Trabajador/menuTrabajador');
							$this->load->view('V_Trabajador/buscarPaciente',$mensaje);
							$this->load->view('footer.php');
						}
					}else{

						$this->load->view('V_Trabajador/menuTrabajador');
						$this->load->view('V_Trabajador/buscarPaciente');
						$this->load->view('footer.php');
					}

				} else {
					redirect("principal");
				}
			}else{
				redirect("principal");
			}


		}

	/**
	 * Comprueba que el DNI introducido pertenece a algun paciente
	 * registrado en la clínica
	 */
	public function comprobarPaciente(){
		if (isset($_SESSION["tipo"])) {
	  		if ($_SESSION["tipo"]=="e" || $_SESSION["tipo"]=="ea")
	  		{

				if(isset($_POST['DNI']))
				{
					  if($this->m_usuarios->obtenerIDPaciente()>0)
					  {

					  $this->altaPresupuesto();

					  }else{

						  $mensaje=array("texto"=>"Usuario no encontrado");
						  //Carga el menu Administrador
						  $this->load->view('V_Trabajador/menuTrabajador');
						  $this->load->view('V_Trabajador/AltaPresupuesto1',$mensaje);
						  $this->load->view('footer.php');
					  }
				}else{

						$this->load->view('V_Trabajador/menuTrabajador');
						$this->load->view('V_Trabajador/AltaPresupuesto1');
						$this->load->view('footer.php');
						}

	  		} else {
						redirect("principal");
					   }
		}else{
			redirect("principal");
		}


	}

	/**
	 * Contiene la vista que crea el formulario que da alta al presupuesto
	 * de los pacientes.
	 */
	public function altaPresupuesto()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"]=='e' || $_SESSION["tipo"]=='ea') {
				//Carga el menu Administrador
		if(isset($_POST['name'])){
			/*Crea el presupuesto ,borra el dato del paciente de las sesiones y almacena la ID del presupuesto realizado*/
			$this->m_usuarios->altaPresupuesto();
		    $this->addServicioPresupuesto();
		}else{
			$this->load->view('V_Trabajador/menuTrabajador');
			//Carga formulario Alta presupuesto
			$this->load->view('V_Trabajador/AltaPresupuesto2');
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

	/**
	 * Solicita el nombre y nota del Presupuesto
	 * Asgina el presupuesto al cliente seleccionado
	 * y guarda la ID del presupuesto generado
	 */
	public function rellenarPresupuesto()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'e' || $_SESSION["tipo"] == 'ea') {
		//Carga el menu Administrador
		$this->load->view('V_Trabajador/menuTrabajador');
		//Carga formulario Alta presupuesto
		$this->load->view('V_Trabajador/AltaPresupuesto2');
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
	 * Añadir el servicio asignado al placciente ,en el  presupuesto
	 * selecionado.
	 */
	public function addServicioPresupuesto()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"]=='e' || $_SESSION["tipo"]=='ea')
			{
				$datos = array(
					'ListaTratamientos' => $this->m_usuarios->listarTratamientos(),
					'ListaPruebas' => $this->m_usuarios->listarPruebas(),
					'dientes' => $this->m_usuarios->listarPiezasDentales()
				);

				if (isset($_POST['tipoServicio'])) {
					$this->m_usuarios->addTratamientoPacientePresupuesto();
					$this->m_usuarios->totalPresupuesto();

					$this->load->view('V_Trabajador/menuTrabajador');
					//Carga formulario Alta presupuesto
					$this->load->view('V_Trabajador/AltaPresupuesto3', $datos);
					//Carga Footer
					$this->load->view("footer");
				} else {

					$this->load->view('V_Trabajador/menuTrabajador');
					//Carga formulario Alta presupuesto
					$this->load->view('V_Trabajador/AltaPresupuesto3', $datos);
					//Carga Footer
					$this->load->view("footer");
				}

			}else {
					redirect("principal");
				}
		}else{
			redirect("principal");
			}
	}

	/**
	 * Calcula el total del presupuesto
	 * borra la id del presupuesto de la sesión
	 * vuelve al principio (Crear Presupuesto)
	 */
	public function finPresupuesto()
	{
		$this->m_usuarios->finalizarPresupuesto();
		$this->session->unset_userdata('idPresupuesto');
		$this->session->unset_userdata('anadir');
		$this->comprobarPaciente();
	}

	/**
	 * Comprueba que el DNI introducido pertenece a algun paciente
	 * registrado en la clínica
	 */
	public function comprobarPresupuestoPaciente(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"]=="e" || $_SESSION["tipo"]=="ea")
			{

				if(isset($_POST['DNI']))
				{
					if($this->m_usuarios->obtenerIDPaciente()>0)
					{

						$this->presupuestosPaciente();

					}else{

						$mensaje=array("texto"=>"Usuario no encontrado");
						//Carga el menu Administrador
						$this->load->view('V_Trabajador/menuTrabajador');
						$this->load->view('V_Trabajador/consutarPresupuestos',$mensaje);
						$this->load->view('footer.php');
					}
				}else{

					$this->load->view('V_Trabajador/menuTrabajador');
					$this->load->view('V_Trabajador/consutarPresupuestos');
					$this->load->view('footer.php');
				}

			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}


	}

	/**
	 * Muestra los presupuestos Asociados al paciente
	 * obtenido.
	 */
	public function presupuestosPaciente(){
		$datos=array('presupuesto'=>$this->m_usuarios->ObtenerPresupuestosPaciente());
		if(isset($_POST['presupuesto'])){
			$this->m_usuarios->activarDesactivarPresupuesto();
			$this->presupuestoActivarDesactivar();
		}else {
			$this->load->view('V_Trabajador/menuTrabajador');
			$this->load->view('V_Trabajador/presupuestosPaciente', $datos);
			$this->load->view('footer.php');
		}
	}

	/**
	 * Activa o Desactiva el presupuesto seleccionado
	 */
	public function presupuestoActivarDesactivar(){
		$datos=array('presupuesto'=>$this->m_usuarios->ObtenerPresupuestosPaciente());
		$this->load->view('V_Trabajador/menuTrabajador');
		$this->load->view('V_Trabajador/presupuestosPaciente',$datos);
		$this->load->view('footer.php');
	}

	/**
	 * Comprueba que el DNI introducido pertenece a algun paciente
	 * registrado en la clínica y envia al panel de eliminar presupuesto.
	 */
	public function eliminarPresupuestoPaciente(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"]=="e" || $_SESSION["tipo"]=="ea")
			{

				if(isset($_POST['DNI']))
				{
					if($this->m_usuarios->obtenerIDPaciente()>0)
					{

						$this->deletepresupuestosPaciente();

					}else{

						$mensaje=array("texto"=>"Usuario no encontrado");
						//Carga el menu Administrador
						$this->load->view('V_Trabajador/menuTrabajador');
						$this->load->view('V_Trabajador/eliminarPresupuestosPaciente',$mensaje);
						$this->load->view('footer.php');
					}
				}else{

					$this->load->view('V_Trabajador/menuTrabajador');
					$this->load->view('V_Trabajador/eliminarPresupuestosPaciente');
					$this->load->view('footer.php');
				}

			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}


	}

	/**
	 * Muestra los presupuestos Asociados al paciente
	 * obtenido.
	 */
	public function deletepresupuestosPaciente(){
		$datos=array('presupuesto'=>$this->m_usuarios->ObtenerPresupuestosPaciente());
		if(isset($_POST['presupuesto'])){
			$this->m_usuarios->eliminarPresupuesto();
			$this->vistaEliminarPresupuesto();
		}else {
			$this->load->view('V_Trabajador/menuTrabajador');
			$this->load->view('V_Trabajador/PanelEliminarpresupuestosPaciente', $datos);
			$this->load->view('footer.php');
		}
	}

	/**
	 * Carga las vistas con el Panel de presupuestos elimninados actualizado
	 */
	public function vistaEliminarPresupuesto(){
		$datos=array('presupuesto'=>$this->m_usuarios->ObtenerPresupuestosPaciente());
		$this->load->view('V_Trabajador/menuTrabajador');
		$this->load->view('V_Trabajador/PanelEliminarpresupuestosPaciente',$datos);
		$this->load->view('footer.php');
	}


	/*Vista opciones Panel Paciente*/
	public function opcionesPacientes(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'e' || $_SESSION["tipo"] == 'ea') {
				$datos=$this->m_usuarios->obtenerDatosPacientes();
				//carga el menu
				$this->load->view('V_Trabajador/menuTrabajador');
				//Carga la vista index
				$this->load->view('V_Trabajador/verDatosPaciente',$datos);
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
	 * Modifica los datos del paciente
	 */
	public function actualizarDatosUsuarios(){
		if(isset($_SESSION['tipo']))
		{

			$this->session->set_userdata('modificado', 'Actualizado con exito!');
			if ($this->m_usuarios->actualiarDatosPaciente()> 0) {
				$this->opcionesPacientes();
			} else {
				redirect("principal");
			}
		}
	}

	/**
	 * Elimina los datos del usuario y vuelve al buscador de usuarios
	 */
	public function eliminarPaciente(){
		$this->m_usuarios->eliminarPaciente();
		$this->consultarPaciente();
	}




	/*Opciones Paciente*/

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

