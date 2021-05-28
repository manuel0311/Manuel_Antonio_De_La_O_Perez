/*Crear BBDD*/
CREATE DATABASE IF NOT EXISTS higea;

/*Selecciona La BBDD*/
USE higea;

/*Crear Tabla Usuarios*/
CREATE TABLE USUARIOS(
	idUsuario INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(60) NOT NULL,
    apellidos VARCHAR(60) NOT NULL,
    telefono CHAR(9) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    DNI VARCHAR(9) NOT NULL UNIQUE,
	contrasenia` varchar(255) NOT NULL,
    restablecerContrasenia BIT NOT NULL DEFAULT 0,
    tipo enum ('a','e','ea','p') NOT NULL
   )ENGINE=InnoDB charset=utf8;
   
/*Crear tabla Empleado*/   
CREATE TABLE EMPLEADO(
    idUsuario_Empleado INT(9) UNSIGNED NOT NULL PRIMARY KEY,
    numColegiado INT UNSIGNED NOT NULL,
	FOREIGN KEY (idUsuario_Empleado) REFERENCES usuarios(idUsuario)
	ON UPDATE CASCADE
	ON DELETE CASCADE
   )ENGINE=InnoDB charset=utf8;
   
/*Crear Tabla Presupuesto*/   
CREATE TABLE PRESUPUESTO(
    idPresupuesto INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idUsuario_Empleado INT UNSIGNED NOT NULL,
    idUsuario_Paciente INT UNSIGNED NOT NULL,
    nombrePresupuesto VARCHAR(60) NOT NULL,
    precioTotal DECIMAL(7,2) UNSIGNED NOT NULL,
    IVA TINYINT NOT NULL, 
    fechaPresupuesto DATE NOT NULL DEFAULT CURDATE(),
    nota MEDIUMTEXT ,
    activo BIT DEFAULT 0,
    archivado BIT DEFAULT 0,
	FOREIGN KEY (idUsuario_Empleado) REFERENCES EMPLEADO(idUsuario_Empleado)
	ON UPDATE CASCADE
	ON DELETE CASCADE,
    FOREIGN KEY (idUsuario_Paciente) REFERENCES usuarios(idUsuario)
	ON UPDATE CASCADE
	ON DELETE CASCADE
   )ENGINE=InnoDB charset=utf8;
   
/*Crear Tabla Tratamientos */
CREATE TABLE TRATAMIENTOS(
    idTratamiento INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreTratamiento VARCHAR(40) NOT NULL,
    descripcionTratamiento MEDIUMTEXT NOT NULL,
    precio FLOAT(6,2) NOT NULL
   )ENGINE=InnoDB charset=utf8;
   
/*Crear Tratamiento_Paciente*/   
CREATE TABLE TRATAMIENTO_PACIENTE(
    idTratamientoPaciente INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	idTratamiento INT UNSIGNED NOT NULL,
	idPresupuesto INT UNSIGNED NOT NULL,
    precioExtra DECIMAL(7,2) UNSIGNED NOT NULL,
    fechaRealizado date DEFAULT CURDATE(),
    FOREIGN KEY (idTratamiento) REFERENCES TRATAMIENTOS(idTratamiento)
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	FOREIGN KEY (idPresupuesto) REFERENCES PRESUPUESTO(idPresupuesto) 
	ON UPDATE CASCADE
	ON DELETE CASCADE
   )ENGINE=InnoDB charset=utf8;
     
 /*Crear tabla Piezas_Dentales*/
 CREATE TABLE PIEZAS_DENTALES(
  numPiezaDental TINYINT UNSIGNED NOT NULL PRIMARY KEY,
  nombrePiezaDental VARCHAR(30) NOT NULL
 )ENGINE=InnoDB charset=utf8;  
 
 /*Crear taba Revisa*/
 CREATE TABLE REVISA( 
 idTratamiento INT UNSIGNED NOT NULL, 
 numPiezaDental TINYINT UNSIGNED NOT NULL, 
 PRIMARY KEY(idTratamiento,numPiezaDental),
 FOREIGN KEY (idTratamiento) REFERENCES TRATAMIENTOS(idTratamiento)
 ON UPDATE CASCADE
 ON DELETE CASCADE,
 FOREIGN KEY (numPiezaDental) REFERENCES PIEZAS_DENTALES(numPiezaDental)
 ON UPDATE CASCADE
 ON DELETE CASCADE 
 )ENGINE=InnoDB charset=utf8;

/*CREAR tabla Afecta*/
 CREATE TABLE AFECTA( 
 idTratamientoPaciente INT UNSIGNED NOT NULL, 
 numPiezaDental TINYINT UNSIGNED NOT NULL, 
 PRIMARY KEY(idTratamientoPaciente,numPiezaDental),
 FOREIGN KEY (idTratamientoPaciente) REFERENCES TRATAMIENTO_PACIENTE(idTratamientoPaciente)
 ON UPDATE CASCADE
 ON DELETE CASCADE,
 FOREIGN KEY (numPiezaDental) REFERENCES PIEZAS_DENTALES(numPiezaDental)
 ON UPDATE CASCADE
 ON DELETE CASCADE 
 )ENGINE=InnoDB charset=utf8;
 
 /*Crear Tabla Pruebas*/
 CREATE TABLE PRUEBAS(
    idPrueba INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombrePrueba VARCHAR(40) NOT NULL,
    descripcionPrueba MEDIUMTEXT NOT NULL,
    precio DECIMAL(7,2) UNSIGNED NOT NULL
   )ENGINE=InnoDB charset=utf8;
   
/*Crear tabla Prueba_Paciente*/   
CREATE TABLE PRUEBA_PACIENTE(
    idPruebaPaciente INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	idPrueba INT UNSIGNED NOT NULL,
	idPresupuesto INT UNSIGNED NOT NULL,
    precioExtra DECIMAL(7,2) UNSIGNED NOT NULL,
    fechaRealizado date DEFAULT CURDATE(),
    FOREIGN KEY (idPrueba) REFERENCES PRUEBAS(idPrueba)
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	FOREIGN KEY (idPresupuesto) REFERENCES PRESUPUESTO(idPresupuesto) 
	ON UPDATE CASCADE
	ON DELETE CASCADE
   )ENGINE=InnoDB charset=utf8;
   
/*Crear taba IVA*/   
CREATE TABLE IVA(
	PorcentajeIVA  TINYINT NOT NULL
	)ENGINE=InnoDB charset=utf8;

   
/*Insertar Piezas dentales*/
INSERT INTO piezas_dentales (numPiezaDental,nombrePiezaDental) VALUES
(0,"Dentadura Completa"), 
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
(85,"Segundo Molar");



   