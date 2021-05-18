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
		$this->load->model('M_usuarios', 'm_usuarios');


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
	 *
	 * Comprueba el correo introducido y devuelve
	 * 0 -> Email no registrado
	 * 1 -> Email registrado en la BBDD
	 */
	public function comprobarCorreo(){

		if($this->m_usuarios->comprobarlMailexistente()>0){
			echo  json_encode(1);
		}else {
			echo  json_encode(0);
		}
	}

	/**
	 * Comprueba el DNI introducido y devuelve
	 * 0-> DNI no registrado
	 * 1 -> DNI registrado
	 */
	public function comprobarDNI(){
		if($this->m_usuarios->comprobarDNIexistente()>0){
			echo  json_encode(1);
		}else {
			echo  json_encode(0);
		}
	}

	/**
	 * Registra los datos del formulario Empleado a la base de datos
	 * y devuelve el mensaje si se hizo un insert correcto o no.
	 */
	public function envioDatosTrabajador()
	{
		$mensaje=array("texto"=>$this->m_usuarios->addUsuarios());
		//Carga el menu Administrador
		$this->load->view('V_Admin/menuAdmin');
		//Carga Formulario Registro
		$this->load->view('V_Admin/RegistroTrabajador',$mensaje);
		//Carga Footer
		$this->load->view("footer");
	}

	/**
	 *
	 */
	public function envioDatosPaciente(){
		$mensaje=array("texto"=>$this->m_usuarios->addUsuarios());
		//Carga el menu Administrador
		$this->load->view('V_Trabajador/menuTrabajador');
		//Carga Formulario Registro
		$this->load->view('V_Trabajador/RegistroPaciente',$mensaje);
		//Carga Footer
		$this->load->view("footer");
	}
}
