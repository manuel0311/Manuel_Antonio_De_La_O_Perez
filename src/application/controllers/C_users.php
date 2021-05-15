<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_users extends CI_Controller
{


	/**
	 * C_users constructor.
	 * LLama al constructor
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_usuarios','M_usuarios');
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
	 $mensaje=$this->M_usuarios->addUsuarios();


		if($this->M_usuarios->comprobarDatosregistro())
		{
			if($this->M_usuarios->addUsuarios()){

				$this->formularioEmpleado('success');
			}
		}else{
			    $this->formularioEmpleado($textoError);
		     }
	}

}
