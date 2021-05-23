<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo '<!DOCTYPE html>
<html>

<head>
    <title>Panel Administrador Higea</title>
    <meta charset="utf-8">
    <link  rel="icon"  href="'.base_url("assets/Media/img/logo.ico").'" type="image/ico" />
    <!--Estilos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="'.base_url("assets/css/estilo.css").'"/>
</head>

<!-- Menú-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="administrador" "><img class="" src="'.base_url("assets/Media/img/logo-clinica.png").'"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          		Usuarios
        	</a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="registroEmpleado">Registrar Trabajador</a>
			  <a class="dropdown-item" href="#">Consultar Trabajador</a>
			  <a class="dropdown-item" href="#">Eliminar Trabajador</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Asignar Nuevo Administrador</a>
          <a class="dropdown-item" href="#">Eliminar Administrador</a>
          <a class="dropdown-item" href="#">Eliminar Cuenta</a>
        </div>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Registrar Tratamiento/Prueba</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Consultar Tratamiento</a>
          <a class="dropdown-item" href="#">Eliminar Tratamiento</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Consultar Prueba</a>
          <a class="dropdown-item" href="#">Eliminar Prueba</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="modificarIVA">Modificar IVA</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         	Datos Usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="verDatos">Consultar Datos</a>
          <a class="dropdown-item" href="#">Cambiar Contraseña</a>

          
      </li>
        <a class="nav-link" href="logout"  role="button"  aria-haspopup="true" aria-expanded="false">
         	Cerrar Sesión
        </a>
      </li>
    </ul>
  </div>
</nav>';
