<?php defined('BASEPATH') OR exit('No direct script access allowed');


class M_Usuarios extends CI_Model
{
	/**
	 * @author :Manuel Antonio De La O Pérez
	 */

	/**
	 * M_usuarios constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		/*Cargar conexión BBDD -- datos en config/database.php*/
		$this->bd = $this->load->database('default', true);
		/*Helper cookie*/
		$this->load->helper('cookie');
		// Carga la libreria session
		$this->load->library('session');
		$this->load->helper('url');

	}

	/**
	 * Comprueba el campo colegiado , si se encuentra ,realiza el registro de Administrador/Empleado.
	 * Sino, registra al paciente
	 * @return mixed
	 */
	public function addUsuarios()
	{
			if(isset($_POST['colegiado']))
			{
				$datos = array(
					"nombre"=>$this->input->POST('name'),
					"apellidos"=>$this->input->POST('surname'),
					"telefono"=>$this->input->POST('phone'),
					"email"=>$this->input->POST('mail'),
					"DNI"=>$this->input->POST('DNI'),
					"contrasenia" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					"tipo"=>'e'
				);

				if($this->insertarUsuarios($datos))
				{
					$idTrabajador=$this->bd->insert_id() ;

					$anadirEmpleado= array(
						"idUsuario_Empleado"=>$idTrabajador,
						"numColegiado"=>$this->input->POST('colegiado')
					);

					if($this->insertarEmpleado($anadirEmpleado)>0)
					{
						return "Registro realizado correctamente!";
					}else{
						return "Fallo al registrar,intentelo más tarde";
					}

				}

			}else{

				$datos = array(
					"nombre"=>$this->input->POST('name'),
					"apellidos"=>$this->input->POST('surname'),
					"telefono"=>$this->input->POST('phone'),
					"email"=>$this->input->POST('mail'),
					"DNI"=>$this->input->POST('DNI'),
					"contrasenia" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					"tipo"=>'p'
				);

				if($this->insertarUsuarios($datos))
				{
					return "Registro realizado correctamente!";
				}else{
					return "Fallo al registrar,intentelo más tarde";
				}
			}


	}

	public function obtenerIVA(){

		$this->db->select('PorcentajeIVA');
		$this->db->from('iva');
		$datos = $this->db->get();
		$resultado=$datos->result_array();
		return $resultado[0]['PorcentajeIVA'];

	}
	/**
	 * Ejecutar consultas SQL
	 * @param $codigo
	 * @return mixed
	 */
	public function ejecutarConsulta ($codigo){
		$consulta= $this->bd->query($codigo);
		$resultado= $consulta->result_array();
		$consulta->free_result();
		return $resultado;
	}

	/**
	 * Registra los datos a la tabla Usuario
	 * @param $datos
	 * @return mixed
	 */
	public function insertarUsuarios($datos)
	{
		$this->bd->insert('usuarios',$datos);
		$filasAfectadas=$this->bd->affected_rows();
		return $filasAfectadas;
	}

	/**
	 * Registra los datos a la tabla Empleado
	 * @param $datos
	 * @return mixed
	 */
	public function insertarEmpleado($datos)
	{
		$this->bd->insert('empleado',$datos);
		$filasAfectadas=$this->bd->affected_rows();
		return $filasAfectadas;
	}

	/**
	 * Comprueba el tipo de servicio que el usuario marcó en el formulario
	 * y realiza la correspondiente sentencia.
	 * @param $datos
	 * @return mixed
	 */
	public function insertarServicios(){

		if($_POST["tipoServicio"]=='tratamientos')
		{
			$datos=array(
				'nombreTratamiento'=>$_POST['name'],
				'descripcionTratamiento'=>$_POST['texto'],
				'precio'=>$_POST['price']
			);
			$this->bd->insert('tratamientos',$datos);
			$filasAfectadas=$this->bd->affected_rows();
			return $filasAfectadas;
		}else
			{
				$datos=array(
					'nombrePrueba'=>$_POST['name'],
					'descripcionPrueba'=>$_POST['texto'],
					'precio'=>$_POST['price']
				);

				$this->bd->insert('pruebas',$datos);
				$filasAfectadas=$this->bd->affected_rows();
				return $filasAfectadas;
			}

	}

	/**
	 * Comprueba si el DNI introducido se encuentra en la BBDD
	 * @return mixed
	 */
	public function comprobarDNIexistente()
	{
		$comprobarDNI="SELECT DNI FROM usuarios WHERE DNI='".$_POST["DNI"]."';";
		$this->ejecutarConsulta($comprobarDNI);
		return $this->bd->affected_rows();

	}

	/**
	 * Comprueba si el Correo Introducido se encuentra en la  BBDD
	 * @return mixed
	 */
	public function comprobarlMailexistente()
	{
	  $comprobarMail="SELECT email FROM usuarios WHERE email='".$_POST["mail"]."';";
	  $this->ejecutarConsulta($comprobarMail);
	  return $this->bd->affected_rows();
	}

	/**
	 * Busca el id del usuario con el DNI introducido
	 * @return mixed
	 *
	 */
	public function obtenerIDPaciente(){

		$this->db->select('idUsuario');
		$this->db->where('DNI',$_POST["DNI"]);
		$this->db->from('usuarios');
		$datos = $this->db->get();
		if($datos->num_rows() > 0){
			$resultado=$datos->result_array();
			$this->session->set_userdata('idPaciente',$resultado[0]['idUsuario']);
			return 1;
		}else{
			return 0;
		}

	}

	/**
	 *
	 */
	public function ObtenerPresupuestosPaciente(){

		$presupuestos='SELECT `idPresupuesto`,`idUsuario_Paciente`, `nombrePresupuesto`, `precioTotal`,`activo`,`fechaPresupuesto` 
					   FROM `presupuesto` WHERE `idUsuario_Paciente` ='.$_SESSION['idPaciente'];
		$datos=$this->db->query($presupuestos);
		return $datos->result_array();
	}

	public function activarDesactivarPresupuesto(){
		$this->db->select('activo');
		$this->db->where('idPresupuesto',$_POST["presupuesto"]);
		$this->db->from('presupuesto');
		$datos = $this->db->get();
		$resultado=$datos->result_array();

		if($resultado[0]['activo']=='0'){

			$activar="UPDATE presupuesto SET activo = 1 WHERE idPresupuesto ='".$_POST["presupuesto"]."';";
			$this->db->query($activar);
		}else{

			$desactivar="UPDATE presupuesto SET activo = 0 WHERE idPresupuesto ='".$_POST["presupuesto"]."';";
			$this->db->query($desactivar);
		}
	}
	/**
	 * Realiza la consulta y obtiene las tablas del usuario
	 * @return mixed
	 * retorno los datos que se almacenan en la sesión
	 *
	 */
	public function datosUsuario(){
		$consulta = $this->db->query("SELECT idUsuario,email,contrasenia,restablecerContrasenia,tipo  FROM usuarios WHERE email='".$_POST["mail"]."';");

		 return $consulta->row_array();

	}

	/**
	 * Obtiene los datos del Usuario
	 * @return mixed
	 */
	public function obtenerDatosUsuario(){

			if($_SESSION['tipo']!='e' && $_SESSION['tipo']!='ea'){

				$consulta = $this->db->query ("SELECT nombre,apellidos,telefono,email,DNI FROM usuarios WHERE idUsuario =".$_SESSION['id'].";");
				return $consulta->row_array();
			}else{
				/*Consulta los datos del Usuario*/
				$consulta = $this->db->query ("SELECT nombre,apellidos,telefono,email,DNI FROM usuarios WHERE idUsuario =".$_SESSION['id'].";");
				/*Almacena los datos en un array*/
				$datosUsuario=$consulta->row_array();

				$ObtenerNumColegiado= $this->db->query("SELECT numColegiado FROM empleado WHERE idUsuario_Empleado =".$_SESSION['id'].";");

				$datosEmpleado=$ObtenerNumColegiado->row_array();
				return $datosCompleto=array(
					'nombre'=>$datosUsuario['nombre'],
					'apellidos'=>$datosUsuario['apellidos'],
					'telefono'=>$datosUsuario['telefono'],
					'email'=>$datosUsuario['email'],
					'DNI'=>$datosUsuario['DNI'],
					'numColegiado'=>$datosEmpleado['numColegiado']
				);
			}
		}

	/**
	 * Obtiene el porcentaje del formulario
	 * realiza la consulta
	 * @return mixed devuelve 1 si se realizo correctamente
	 */
	public function actualizarIVA(){
		$iva=array(
			'PorcentajeIVA'=>$_POST['porcentaje']
		);
		$this->db->update('iva', $iva);
		return $this->db->affected_rows();

	}

	/**
	 * Actualiza los datos introducido por el usuario.
	 * @return mixed
	 */
	public function actualiarDatos(){
		$datos=array
		(
			'nombre'=>$_POST['name'],
			'apellidos'=>$_POST['surname'],
			'email'=>$_POST['mail'],
			'telefono'=>$_POST['phone']
		);
		$this->db->where('idUsuario', $_SESSION['id']);
		$this->db->update('usuarios',$datos);

		return $this->db->affected_rows();
	}

	/**
	 * Da de alta el presupuesto en la BBDD
	 * almecena su id en la sesión y elimina la
	 * id del usuario al que se le asgina el presupuesto
	 */
	public function altaPresupuesto(){
		$datos=array(
			'idUsuario_Empleado'=>$_SESSION['id'],
			'idUsuario_Paciente'=>$_SESSION['idPaciente'],
			'nombrePresupuesto'=>$_POST['name'],
			'IVA'=>$this->obtenerIVA(),
			'nota'=>$_POST['texto']
		);
		$this->bd->insert('presupuesto',$datos);
		$idPresupuesto=$this->bd->insert_id();
		$this->session->unset_userdata('idPaciente');
		$this->session->set_userdata('idPresupuesto',$idPresupuesto);

	}

	/**
	 *
	 */
	public function addTratamientoPacientePresupuesto()
	{
		$this->session->set_userdata('anadir',true);
		/*Inserta tratamiento_Paciente */
		$datosTratamientosPaciente=array
			(
				'idTratamiento'=>$_POST['tratamientos'],
				'idPresupuesto'=>$_SESSION['idPresupuesto'],
				'precioExtra'=>$_POST['price']
			);
		$this->bd->insert('tratamiento_paciente',$datosTratamientosPaciente);
		$idPresupuesto=$this->bd->insert_id();
		/*Insertar Afecta*/

	foreach ($_POST['dientes_lista'] as $pieza){
			$insertarAfecto="INSERT INTO afecta (idTratamientoPaciente,numPiezaDental) VALUES (".$idPresupuesto.",".$pieza.")";
			$this->bd->query($insertarAfecto);

		}

	}
	/**
	 * Obtiene todos los tratamientos registrados de la base de datos y los devuelve
	 * @return mixed
	 */
	public function listarTratamientos(){
	  $tratamientos='SELECT idTratamiento,nombreTratamiento,precio FROM tratamientos ';
	  return $this->ejecutarConsulta($tratamientos);
	}

	/**
	 * Obtiene todas las piezas dentales de la base de datos y los devuelve
	 * @return mixed
	 */
	public function listarPiezasDentales(){
		$piezasDentales='SELECT * FROM piezas_dentales;';
		return $this->ejecutarConsulta($piezasDentales);
	}

	/**
	 * Obtiene todas las pruebas registrados de la base de datos y los devuelve
	 * @return mixed
	 */
	public function listarPruebas(){
		$pruebas='SELECT idPrueba,nombrePrueba,precio FROM pruebas;';
		return $this->ejecutarConsulta($pruebas);
	}

	/**
	 * Calcula el total de precios del presupuesto
	 * y devuelve el importe sin IVA y con IVA
	 * @return array
	 */
	public function totalPresupuesto(){
		$totalPresupuesto="SELECT TP.idTratamientoPaciente,T.idTratamiento,idPresupuesto,sum(precio+precioExtra) as Total
						   FROM tratamientos  T
						   LEFT JOIN tratamiento_paciente TP
						   ON TP.idTratamiento = T.idTratamiento
						   RIGHT JOIN afecta A
						   ON TP.idTratamientoPaciente=A.idTratamientoPaciente
						   WHERE idPresupuesto=".$_SESSION['idPresupuesto'].";";
		$obtenerDatos=$this->db->query($totalPresupuesto);
		$datos=$obtenerDatos->row_array();
		$iva=$this->obtenerIVA();
		$totalSinIva=$datos['Total'];
		$totalIva= $totalSinIva+($totalSinIva*$iva/100);

		$precios=array(
			'totalSinIVA'=>$totalSinIva,
			'totalIVA'=>$totalIva
						);
		return $precios;


	}

	public function finalizarPresupuesto(){
		$datos=$this->totalPresupuesto();
		$actualizarPrecio="UPDATE presupuesto SET precioTotal=".$datos['totalIVA']." WHERE idPresupuesto=".$_SESSION['idPresupuesto'].";";
		$this->db->query($actualizarPrecio);
	}
}



