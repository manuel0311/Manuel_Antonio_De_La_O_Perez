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
	public function insertarServicios($datos){

		if(isset($_POST["tratamientos"]))
		{
			$this->bd->insert('tratamientos',$datos);
			$filasAfectadas=$this->bd->affected_rows();
			return $filasAfectadas;
		}else
			{
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
}



