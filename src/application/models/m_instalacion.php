<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Instalacion extends CI_Model
{

	/**
	 * @author :Manuel Antonio De La O Pérez.
	 */



	/**
	 * M_Instalacion constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		/*Cargar conexión BBDD -- datos en config/database.php*/
		$this->load->dbforge();
		$this->bd = $this->load->database('default', true);
		$this->load->model("M_usuarios","m_usuarios");

	}

	/**
	 * @return mixed
	 * Comprueba que la existe la tabla usuarios
	 * devuelve 0 en caso negativo y 1 en caso afirmativo
	 */
	public function comprobarTabla()
	{
		$comprobartabla="SHOW tables like 'usuarios'";
		$consulta=$this->bd->query($comprobartabla);
		return $consulta->num_rows();
	}

	/**
	 * @return mixed
	 * Comprueba que la tabla usuarios
	 * contiene fila/as
	 */
	public function comprobarAdministrador()
	{
		$comprobarAdministrador="select * from usuarios";
		$consulta=$this->bd->query($comprobarAdministrador);
		return $consulta->num_rows();
	}

	/**
	 * @return mixed
	 * Comprueba que la tabla IVA
	 * contiene fila/as
	 */
	public function comprobarIVA(){
		$comprobarIVA="select * from iva";
		$consulta=$this->bd->query($comprobarIVA);
		return $consulta->num_rows();
	}

	/**
	 * 	Instalación tablas y contenidos principal de la BBDD.
	 */
	public function importarScript()
	{
		$atributos = array('ENGINE' => 'InnoDB');

		/*Crear Tabla Usuarios*/
		$tablaUsuario = array(
			'idUsuario' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'nombre' => array(
				'type' => 'VARCHAR',
				'constraint' => '60',
			),
			'apellidos' => array(
				'type' => 'VARCHAR',
				'constraint' => '60',
			),
			'telefono' => array(
				'type' => 'CHAR',
				'constraint' => '9',
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'unique' => TRUE
			),
			'DNI' => array(
				'type' => 'VARCHAR',
				'constraint' => '9',
				'unique' => TRUE
			),
			'contrasenia' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'restablecerContrasenia' => array(
				'type' => 'BIT',
				'default' => 0,
			),
			'tipo' => array(
				'type' => 'ENUM("a","e","ea","p")',

			),

		);
		$this->dbforge->add_field($tablaUsuario);
		$this->dbforge->add_key('idUsuario', TRUE);
		$this->dbforge->create_table('USUARIOS', $atributos);

		/*Crear tabla Empleado*/
		$tablaEmpleado = array(
			'idUsuario_Empleado' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'numColegiado' => array(
				'type' => 'INT',
				'unsigned' => TRUE
			)

		);
		$this->dbforge->add_field($tablaEmpleado);
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (idUsuario_Empleado) REFERENCES USUARIOS(idUsuario) ON UPDATE CASCADE ON DELETE CASCADE');
		$this->dbforge->create_table('EMPLEADO', $atributos);

		/*Crear Tabla Presupuesto*/
		$tablaPresupuesto = array(
			'idPresupuesto' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'idUsuario_Empleado' => array(
				'type' => 'INT',
				'unsigned' => TRUE
			),
			'idUsuario_Paciente' => array(
				'type' => 'INT',
				'unsigned' => TRUE
			),

			'nombrePresupuesto' => array(
				'type' => 'VARCHAR',
				'constraint' => '60',
				'unsigned' => TRUE
			),
			'precioTotal' => array(
				'type' => 'DECIMAL(5,2)',
				'unsigned' => TRUE
			),
			'IVA' => array(
				'type' => 'TINYINT'
			),
			'nota' => array(
				'type' => 'MEDIUMTEXT'
			),
			'activo' => array(
				'type' => 'BIT',
				'default' => 0
			),
			'archivado' => array(
				'type' => 'BIT',
				'default' => 0
			),


		);
		$this->dbforge->add_field($tablaPresupuesto);
		$this->dbforge->add_field('fechaPresupuesto date NOT NULL DEFAULT current_timestamp()');
		$this->dbforge->add_key('idPresupuesto', TRUE);
		$this->dbforge->add_field('FOREIGN KEY (idUsuario_Empleado) REFERENCES EMPLEADO(idUsuario_Empleado)
									ON UPDATE CASCADE
									ON DELETE CASCADE,
    							   FOREIGN KEY (idUsuario_Paciente) REFERENCES USUARIOS(idUsuario)
									ON UPDATE CASCADE
									ON DELETE CASCADE');
		$this->dbforge->create_table('PRESUPUESTO', $atributos);

		/*Crear Tabla Tratamientos */
		$tablaTratamientos = array(
			'idTratamiento' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			    'nombreTratamiento' => array(
				'type' => 'VARCHAR',
				'constraint' => '40'

			),
				'descripcionTratamiento' => array(
				'type' => 'MEDIUMTEXT',

			),
				'precio' => array(
					'type' => 'DECIMAL(5,2)',
					'unsigned' => TRUE

			),

		);
		$this->dbforge->add_field($tablaTratamientos);
		$this->dbforge->add_key('idTratamiento', TRUE);
		$this->dbforge->create_table('TRATAMIENTOS', $atributos);

		/*Crear tabla Tratamiento_Paciente*/
		$tablaTratamientos_Paciente = array(
				'idTratamientoPaciente' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
				'idTratamiento' => array(
				'type' => 'INT',
				'unsigned'=> TRUE
			),
				'idPresupuesto' => array(
				'type' => 'INT',
				'unsigned'=> TRUE

			),
				'precioExtra' => array(
					'type' => 'DECIMAL(5,2)',
					'unsigned' => TRUE
			),

		);
		$this->dbforge->add_field($tablaTratamientos_Paciente);
		$this->dbforge->add_key('idTratamientoPaciente', TRUE);
		$this->dbforge->add_field('fechaPresupuesto date NOT NULL DEFAULT current_timestamp()');
		$this->dbforge->add_field('FOREIGN KEY (idTratamiento) REFERENCES TRATAMIENTOS(idTratamiento)
								    ON UPDATE CASCADE
									ON DELETE CASCADE,
								   FOREIGN KEY (idPresupuesto) REFERENCES PRESUPUESTO(idPresupuesto) 
									ON UPDATE CASCADE
									ON DELETE CASCADE');
		$this->dbforge->create_table('TRATAMIENTO_PACIENTE', $atributos);

		/*Crear tabla Piezas_Dentales*/
		$tablaPiezasDentales = array(
				'numPiezaDental' => array(
				'type' => 'TINYINT',
				'unsigned' => TRUE
			),
				'nombrePiezaDental' => array(
				'type' => 'VARCHAR',
				'constraint' => '30',
			)

		);
		$this->dbforge->add_field($tablaPiezasDentales);
		$this->dbforge->add_key('numPiezaDental', TRUE);
		$this->dbforge->create_table('PIEZAS_DENTALES', $atributos);

		/*Crear taba Revisa*/
		$tablaRevisa = array(
			'idTratamiento' => array(
				'type' => 'INT',
				'unsigned' => TRUE
			),
				'numPiezaDental' => array(
				'type' => 'TINYINT',
				'unsigned' => TRUE,
			)

		);
		$this->dbforge->add_field($tablaRevisa);
		$this->dbforge->add_key('idTratamiento', TRUE);
		$this->dbforge->add_key('numPiezaDental',TRUE);
		$this->dbforge->add_field(' FOREIGN KEY (idTratamiento) REFERENCES TRATAMIENTOS(idTratamiento)
									 ON UPDATE CASCADE
									 ON DELETE CASCADE,
									FOREIGN KEY (numPiezaDental) REFERENCES PIEZAS_DENTALES(numPiezaDental)
									 ON UPDATE CASCADE
									 ON DELETE CASCADE ');
		$this->dbforge->create_table('REVISA', $atributos);

		/*Crear tabla Afecta*/
		$tablaAfecta = array(
				'idTratamientoPaciente' => array(
				'type' => 'INT',
				'unsigned' => TRUE
			),
			'numPiezaDental' => array(
				'type' => 'TINYINT',
				'unsigned' => TRUE,
			)

		);
		$this->dbforge->add_field($tablaAfecta);
		$this->dbforge->add_key('idTratamientoPaciente', TRUE);
		$this->dbforge->add_key('numPiezaDental',TRUE);
		$this->dbforge->add_field('  FOREIGN KEY (idTratamientoPaciente) REFERENCES TRATAMIENTO_PACIENTE(idTratamientoPaciente)
										 ON UPDATE CASCADE
										 ON DELETE CASCADE,
								     FOREIGN KEY (numPiezaDental) REFERENCES PIEZAS_DENTALES(numPiezaDental)
										 ON UPDATE CASCADE
										 ON DELETE CASCADE ');
		$this->dbforge->create_table('AFECTA', $atributos);

		/*Crear Tabla Pruebas*/
		$tablaPruebas = array(
				'idPrueba' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE

			),
				'nombrePrueba' => array(
				'type' => 'VARCHAR',
				'constraint' => '40'

			),
				'descripcionPrueba' => array(
				'type' => 'MEDIUMTEXT',

			),
				'precio' => array(
					'type' => 'DECIMAL(5,2)',
					'unsigned' => TRUE

			)

		);
		$this->dbforge->add_field($tablaPruebas);
		$this->dbforge->add_key('idPrueba', TRUE);
		$this->dbforge->create_table('PRUEBAS', $atributos);

		/*Crear tabla Prueba_Paciente*/
		$tablaPruebaPaciente = array(
				'idPruebaPaciente' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE

			),
				'idPrueba' => array(
				'type' => 'INT',
				'unsigned' => TRUE

			),
				'idPresupuesto' => array(
				'type' => 'INT',
				'unsigned' => TRUE
			),
				'precioExtra' => array(
					'type' => 'DECIMAL(5,2)',
					'unsigned' => TRUE

			)

		);
		$this->dbforge->add_field($tablaPruebaPaciente);
		$this->dbforge->add_field('fechaRealizado date NOT NULL DEFAULT current_timestamp()');
		$this->dbforge->add_key('idPruebaPaciente', TRUE);
		$this->dbforge->add_field('FOREIGN KEY (idPrueba) REFERENCES PRUEBAS(idPrueba)
										ON UPDATE CASCADE
										ON DELETE CASCADE,
								   FOREIGN KEY (idPresupuesto) REFERENCES PRESUPUESTO(idPresupuesto) 
										ON UPDATE CASCADE
										ON DELETE CASCADE');
		$this->dbforge->create_table('PRUEBA_PACIENTE', $atributos);

		/*Crear tabla IVA*/
		$tablaIVA = array(
			'PorcentajeIVA' => array(
				'type' => 'TINYINT'
			)

		);
		$this->dbforge->add_field($tablaIVA);
		$this->dbforge->create_table('IVA', $atributos);


		/*Insertar Piezas dentales*/
		$datos='INSERT INTO piezas_dentales (numPiezaDental,nombrePiezaDental) VALUES
	(11,"Incisivo Central"),
	(12,"Incisivo Lateral"),
	(13,"Canino"),
	(14,"Primer Premolar"),
	(15,"Segundo Premolar"),
	(16,"Primer Molar"),
	(17,"Segundo Molar"),
	(18,"Cordal"),
	(21,"Incisivo Central"),
	(22,"Incisivo Lateral"),
	(23,"Canino"),
	(24,"Primer Premolar"),
	(25,"Segundo Premolar"),
	(26,"Primer Molar"),
	(27,"Segundo Molar"),
	(28,"Cordal"),
	(31,"Incisivo Central"),
	(32,"Incisivo Lateral"),
	(33,"Canino"),
	(34,"Primer Premolar"),
	(35,"Segundo Premolar"),
	(36,"Primer Molar"),
	(37,"Segundo Molar"),
	(38,"Cordal"),
	(41,"Incisivo Central"),
	(42,"Incisivo Lateral"),
	(43,"Canino"),
	(44,"Primer Premolar"),
	(45,"Segundo Premolar"),
	(46,"Primer Molar"),
	(47,"Segundo Molar"),
	(48,"Cordal"),
	(51,"Incisivo Central"),
	(52,"Incisivo Lateral"),
	(53,"Canino"),
	(54,"Primer Molar"),
	(55,"Segundo Molar"),
	(61,"Incisivo Central"),
	(62,"Incisivo Lateral"),
	(63,"Canino"),
	(64,"Primer Molar"),
	(65,"Segundo Molar"),
	(71,"Incisivo Central"),
	(72,"Incisivo Lateral"),
	(73,"Canino"),
	(74,"Primer Molar"),
	(75,"Segundo Molar"),
	(81,"Incisivo Central"),
	(82,"Incisivo Lateral"),
	(83,"Canino"),
	(84,"Primer Molar"),
	(85,"Segundo Molar")';

		$this->bd->query($datos);

	}
	/**
	 * Añade los datos del Administrador V_Principal
	 * de la aplicacción
	 */
	public function registroAdministrador()
	{
		$datos = array(
			"nombre"=>$this->input->POST('name'),
			"apellidos"=>$this->input->POST('surname'),
			"telefono"=>$this->input->POST('phone'),
			"email"=>$this->input->POST('mail'),
			"DNI"=>$this->input->POST('DNI'),
			"contrasenia" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			"tipo"=>'a'
		);

		$this->m_usuarios->insertarUsuarios($datos);
		$filasAfectadas=$this->bd->affected_rows();
		return $filasAfectadas;

	}

	/**
	 * Obtiene el valor introducido por el usuario
	 * y lo añade la BBDD
	 */
	public function addIVA()
	{

		$IVA=array(
			"PorcentajeIVA"=>$this->input->POST('porcentaje')
		);

		$this->bd->insert('IVA',$IVA);

	}




}
