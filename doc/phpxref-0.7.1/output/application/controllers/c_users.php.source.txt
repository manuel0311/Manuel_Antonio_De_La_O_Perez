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
		//Devuelve la URL de su sitio, como se especifica en su archivo de configuración
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
		} else {
			redirect("principal");
		}
	}

	/**
	 * Formulario Para Enviar y buscar Empleado
	 */
	public function buscarEmpleado()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				$empleado=array('datos'=>$this->m_usuarios->listadoEmpleados());
				//carga el menu
				$this->load->view('V_Admin/menuAdmin');
				//Carga la vista
				$this->load->view("V_Admin/Empleados",$empleado);
				//Carga Footer
				$this->load->view("footer");

			} else {
				redirect("principal");
			}
		} else {
			redirect("principal");
		}
	}

	/**
	 * Muestra la vista con un formalio con los datos del empleado
	 */
	public function empleadoDatos(){

		if (isset($_SESSION["tipo"]))
		{
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea')
			{
				if(!isset($_POST['empleado']))
				{
					$this->buscarEmpleado();
				}else if(isset($_POST['modificar'])){
					$this->session->unset_userdata('modificado');
					$datos=array('datoEmpleado'=>$this->m_usuarios->dataEmpleado());
					//carga el menu
					$this->load->view('V_Admin/menuAdmin');
					//Carga la vista
					$this->load->view("V_Admin/InformacionEmpleado",$datos);
					//Carga Footer
					$this->load->view("footer");
				}else if(isset($_POST['eliminar'])){

					$this->m_usuarios->eliminarDatosEmpleado();
					$this->buscarEmpleado();
				}

			} else {
				redirect("principal");
			}
		} else {
			redirect("principal");
		}
	}

	/**
	 * Modifica los datos del paciente
	 */
	public function actualizarDato(){
		if(isset($_SESSION['tipo']))
		{

			$this->session->set_userdata('modificado', 'Actualizado con éxito!');
			if ($this->m_usuarios->actualiarDatosEmpleado()> 0) {
				$this->empleadoDatos();
			} else {
				redirect("principal");
			}
		}
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
	 * Muestra el panel con los tratamientos registrados
	 * y sus opciones
	 */
	public function Tratamientos(){
		/**
		 * Si existe la sesión comprueba que el usuario es de tipo Administrador (a) o EmpleadoAdministrador(ea)
		 * en caso contrario redirige al usuario a la pantalla principal.
		 */
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
					$datos=array('tratamiento'=>$this->m_usuarios->listaTratamiento());
					//carga el menu
					$this->load->view('V_Admin/menuAdmin');
					//Carga la vista index
					$this->load->view("V_Admin/Tratamientos",$datos);
					//Carga Footer
					$this->load->view("footer");
				}

		}else{
			redirect("principal");
		}
	}

	/**
	 * Comprueba el botón que selecciono el usuario
	 * y ejecuta la funcion deseada
	 */
	public function opcionesTratamiento()
{
	if (!isset($_POST['tratamiento'])) {
		$this->Tratamientos();
	} else if (isset($_POST['modificar'])) {
		$this->datosTratamiento();

	}else if (isset($_POST['eliminar'])){
		$this->EliminarTratamiento();
	}
}

	/**
	 * Modifica los datos del tratamiento
	 */
	public function ModificarTratamientos(){

		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				$datos=array('tratamiento'=>$this->m_usuarios->actualizarTratamiento());
				$this->Tratamientos();
			}

		}else{
			redirect("principal");
		}
	}

	/**
	 * Muesta los datos del tratamiento
	 */
	public function datosTratamiento(){
	$this->session->set_userdata('tratamiento', $_POST['tratamiento']);
	$tratamiento = array('datos' => $this->m_usuarios->datosTratamiento());
	//carga el menu
	$this->load->view('V_Admin/menuAdmin');
	//Carga la vista index
	$this->load->view("V_Admin/ModificarTratamiento", $tratamiento);
	//Carga Footer
	$this->load->view("footer");
}

	/**
	 * Elimina el tratamiento
	 */
	public function EliminarTratamiento(){
		if(!isset($_POST['tratamiento'])){
			//$this->Tratamientos();
		}else{
            $this->m_usuarios->eliminarTratamiento();
			$this->Tratamientos();
		}
	}

	/**
	 * Muestra el panel con las pruebas registradas
	 * y sus opciones
	 */
	public function Prueba(){

		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				$datos=array('prueba'=>$this->m_usuarios->listaPrueba());
				//carga el menu
				$this->load->view('V_Admin/menuAdmin');
				//Carga la vista index
				$this->load->view("V_Admin/prueba",$datos);
				//Carga Footer
				$this->load->view("footer");
			}

		}else{
			redirect("principal");
		}
	}

	/**
	 * Comprueba el botón que selecciono el usuario
	 * y ejecuta la funcion deseada
	 */
	public function opcionesPrueba()
	{
		if (!isset($_POST['prueba'])) {
			$this->Prueba();
		} else if (isset($_POST['modificar'])) {
			$this->datosPrueba();

		}else if (isset($_POST['eliminar'])){
			$this->EliminarPrueba();
		}
	}

	/**
	 * Modifica los datos de la prueba seleccionada
	 */
	public function ModificarPrueba(){

		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'a' || $_SESSION["tipo"] == 'ea') {
				$datos=array('prueba'=>$this->m_usuarios->actualizarPrueba());
				$this->Prueba();
			}

		}else{
			redirect("principal");
		}
	}

	/**
	 * Obtiene los datos de la prueba seleccionada
	 */
	public function datosPrueba(){
		$this->session->set_userdata('prueba', $_POST['prueba']);
		$prueba = array('datos' => $this->m_usuarios->datosPrueba());
		//carga el menu
		$this->load->view('V_Admin/menuAdmin');
		//Carga la vista index
		$this->load->view("V_Admin/ModificarPrueba", $prueba);
		//Carga Footer
		$this->load->view("footer");
	}

	/**
	 * Elimina los datos de la prueba seleccionada
	 */
	public function EliminarPrueba(){
		if(!isset($_POST['prueba'])){
			//$this->Tratamientos();
		}else{
			$this->m_usuarios->eliminarPrueba();
			$this->Prueba();
		}
	}

	/**
	 * Añade el nuevo IVA a la BBDD
	 */
	public function addNuevoIVA(){

		if($this->m_usuarios->actualizarIVA()>0)
		{
			$mensaje=array('texto'=>"Cambio realizado con éxito");
			//carga el menu
			$this->load->view('V_Admin/menuAdmin');
			//Carga la vista index
			$this->load->view("V_Admin/ModificarIVA",$mensaje);
			//Carga Footer
			$this->load->view("footer");

		}

	}

	/**
	 *Registra el servicio a la BBDD y muestra el mensaje de añadido con éxito
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
			$this->session->set_userdata('DatosModificados', 'Actualizado con éxito!');
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

			$this->session->set_userdata('modificado', 'Actualizado con éxito!');
			if ($this->m_usuarios->actualiarDatosPaciente()> 0) {
				$this->opcionesPacientes();
			} else {
				redirect("principal");
			}
		}
	}

	/**
	 * Actualiza los datos del Empleado
	 */
	public function actualizarEmpleado(){
		if(isset($_SESSION['tipo']))
		{

			$this->session->set_userdata('modificado', 'Actualizado con éxito!');
			if ($this->m_usuarios->actualiarDatosPaciente()> 0) {
				$this->opcionesPacientes();
			} else {
				redirect("principal");
			}
		}
	}

	/**Consultar historial del paciente */
	public function historialPaciente(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'e' || $_SESSION["tipo"] == 'ea') {
			$datos=array('historial'=>$this->m_usuarios->obtenerHistorial());
				if(isset($_POST['idTratamientoPaciente'])){
					$this->fechaActualizada();
				}else {
					//carga el menu
					$this->load->view('V_Trabajador/menuTrabajador');
					//Carga la vista index
					$this->load->view('V_Trabajador/Historial', $datos);
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
	 * Recarga la vista con la fecha nueva asginada al paciente
	 */
	public function fechaActualizada(){
		$this->m_usuarios->asignarFechaServicio();

		$datos=array('historial'=>$this->m_usuarios->obtenerHistorial());

				//carga el menu
				$this->load->view('V_Trabajador/menuTrabajador');
				//Carga la vista index
				$this->load->view('V_Trabajador/Historial',$datos);
				//Carga Footer
				$this->load->view("footer");
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

	/**
	 * Lista todos los servicios realizados al paciente
	 */
	public function Historial(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
				$datos=array('Historial'=> $this->m_usuarios->miHistorial());
				//carga el menu
				$this->load->view('V_Paciente/menuPaciente');
				//Carga la vista index
				$this->load->view('V_Paciente/historialPaciente.php',$datos);
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
	 * Lista los presupuestos asociados del paciente actual
	 */
	public function listadoPresupuestosPaciente(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
		       $datos=array('listado'=> $this->m_usuarios->listarPresupuestosPaciente());
				//carga el menu
				$this->load->view('V_Paciente/menuPaciente');
				//Carga la vista index
				$this->load->view('V_Paciente/presupuestosPaciente',$datos);
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
	 * Lista los presupuestos archivados por el paciente
	 */
	public function listadoPresupuestosPacienteArchivados(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
				$datos=array('listado'=> $this->m_usuarios->listarPresupuestosPacienteArchivados());
				//carga el menu
				$this->load->view('V_Paciente/menuPaciente');
				//Carga la vista index
				$this->load->view('V_Paciente/presupuestosArchivados',$datos);
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
	 * Lista los servicios asociados al presupuesto del paciente actual
	 */
	public function listadoPresupuestosParaDescargar(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
				$datos=array('listado'=> $this->m_usuarios->listarPresupuestosPaciente());
				//carga el menu
				$this->load->view('V_Paciente/menuPaciente');
				//Carga la vista index
				$this->load->view('V_Paciente/descargarPresupuestosPaciente',$datos);
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
	 * Lista los presupuestos pendientes de aceptar o rechazar
	 */
	public function listadoPresupuestosPendientes(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {

				$datos=array('listado'=> $this->m_usuarios->listarPresupuestosPendientes());
				//carga el menu
				$this->load->view('V_Paciente/menuPaciente');
				//Carga la vista index
				$this->load->view('V_Paciente/presupuestosPediente',$datos);
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
	 * Acepta o Rechaza los presupuesto y actualiza los datos.
	 */
	public function aceptarRechazarPresupuesto(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
				if(!isset($_POST['presupuesto'])){
					$this->listadoPresupuestosPendientes();
				}else if(isset($_POST['consultar'])){

					$this->listadoPresupuestosPendientes();

				}else if(isset($_POST['aceptar'])) {

					$this->m_usuarios->aceptarPresupuesto();
					$this->listadoPresupuestosPendientes();
				} else if(isset($_POST['rechazar'])){

					$this->m_usuarios->rechazarYDesactivarPresupuesto();
					$this->listadoPresupuestosPendientes();

				}
			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}

}

	/**
	 * Comprueba a opcion que selecciono el paciente
	 * y ejecuta la función correspondiente
	 */
	public function opcionesPresupuestoPaciente()
	{
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
				if(!isset($_POST['presupuesto'])){
					$this->listadoPresupuestosPaciente();
				}else if(isset($_POST['consultar'])){

					$this->vistaFactura();
				}else if(isset($_POST['archivar'])) {

					$this->archivarPaciente();
				} else if(isset($_POST['descargar'])){

					$this->facturaPDF();
					$this->listadoPresupuestosPaciente();
				}
			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}
	}

	/**
	 * Muestra la vista con la información y el servicio asociado a dicho presupuesto y paciente
	 */
	public function vistaFactura(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {
		$datos=array(
			'servicios'=>$this->m_usuarios->datosPresupuesto(),
			'Paciente'=>$this->m_usuarios->usuarioPresupuesto()
		);
		$this->load->view('V_Paciente/menuFactura');
		$this->load->view('V_Paciente/factura',$datos);
			} else {
				redirect("principal");
			}
		}else{
			redirect("principal");
		}

	}

	/**
	 * Archiva el presupuesto selecionnado
	 * y muestra los disponibles para archivar
	 */
	public function archivarPaciente(){
		$this->m_usuarios->archivarPresupuesto();
		$this->listadoPresupuestosPaciente();

	}

	/**
	 * Desarchiva el presupuesto seleccionado
	 * y muestra los disponibles para desarchivar
	 */
	public function desarchivarPaciente(){
		if(!isset($_POST['presupuesto'])){
			$this->listadoPresupuestosPacienteArchivados();
		}else{
			$this->m_usuarios->desarchivarPresupuesto();
			$this->listadoPresupuestosPacienteArchivados();
		}


	}

	/**
	 * Genera un pdf con el presupuesto y los datos del paciente
	 * @throws \Mpdf\MpdfException
	 */
	public function facturaPDF(){
		if (isset($_SESSION["tipo"])) {
			if ($_SESSION["tipo"] == 'p') {

				$datos=array(
					'servicios'=>$this->m_usuarios->datosPresupuesto(),
					'Paciente'=>$this->m_usuarios->usuarioPresupuesto()
				);

				$mpdf = new \Mpdf\Mpdf();
			//	$mpdf->showWatermarkText = true;

			$mpdf->WriteHTML('<watermarktext content="DRAFT" alpha="0.2" />');

			//	$mpdf->SetFooter('Document Title');
				$html=$this->load->view('V_Paciente/factura',$datos,true);
				$mpdf->WriteHTML($html);
			//  $mpdf->Output();
			    $mpdf->Output('FacturaHigea.pdf','D');
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

	public function cambioContrasenia(){
		if (isset($_SESSION["tipo"])) {
			$this>$this->selecionarMenu();
			//Carga la vista index
			$this->load->view('cambioPSW');
			//Carga Footer
			$this->load->view("footer");
		}else{
			redirect("principal");
		}

	}
}

