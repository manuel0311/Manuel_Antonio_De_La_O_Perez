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

	}

	/**
	 * Vista Panel Administrador
	 */
	public function panelAdministrador(){
		//carga el menu
		$this->load->view('V_Admin/menuAdmin');
		//Carga Alerta Cookies
		$this->load->view('Alert_Cookies');
		//Carga la vista index
		$this->load->view("V_Admin/menuAdmin");
		//Carga Footer
		$this->load->view("footer");
		//Carga botón whatsapp
		$this->load->view("V_Principal/BT_Whatsapp");
	}

	/**
	 * Vista Panel Empleado
	 */
	public function panelEmpleado(){
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
	}


	public function panelPaciente(){

	}

}
