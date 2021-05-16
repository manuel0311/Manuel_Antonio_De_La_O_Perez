<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$this->load->model('M_usuarios','m_usuarios');
	}


	/*Gestion Empleado*/
	/**
	 * Funcion validar registros del formulario Empleado
	 */
	public function formularioEmpleado()
	{
		//Carga el menu Administrador
		$this->load->view('V_Admin/menuAdmin');
		//Carga Formulario Registro
		$this->load->view('V_Admin/RegistroTrabajador');
		//Carga Footer
		$this->load->view("footer");
	}

	/**
	 * Funcion validar registros del formulario Empleado
	 */
	public function formularioPaciente()
	{
		//Carga el menu Administrador
		$this->load->view('V_Trabajador/menuTrabajador');
		//Carga Formulario Registro
		$this->load->view('V_Trabajador/RegistroPaciente');
		//Carga Footer
		$this->load->view("footer");
	}

	/**
	 * Envia los datos validados del formulario por Javascript
	 * Comprueba que el email o DNI no estén en la BBDD .
	 * Si ya están muestra un mensaje .
	 * Sino, los registra en la bbdd y envia un mensaje de confirmación.
	 */
	public function envioDatosTrabajador()
	{
	 $mensaje=$this->m_usuarios->addUsuarios();


		if($this->m_usuarios->comprobarDatosregistro())
		{
			if($this->m_usuarios->addUsuarios()){

				$this->formularioEmpleado('success');
			}
		}else{
			    $this->formularioEmpleado($textoError);
		     }
	}

}
