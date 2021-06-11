<?php
echo'
<html>

<head>
    <title>Panel Paciente Higea</title>
    <meta charset="utf-8">
    <link  rel="icon"  href="'.base_url("assets/Media/img/logo.ico").'" type="image/ico" />
    <!--Estilos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="'.base_url("assets/css/estilo.css").'"/>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="pacientes"><img class="" src="'.base_url("assets/Media/img/logo-clinica.png").'"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Datos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="verDatos">Consultar/Modificar Datos</a>
		  <!--<a class="dropdown-item" href="#">Eliminar cuenta</a>-->
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Presupuestos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Historial">Historial Clínica Higea</a>
          <a class="dropdown-item" href="presupuestosPendientes">Presupuesto Pendientes Confirmar</a>
          <a class="dropdown-item" href="misPresupuestos">Consultar Presupuesto</a>
          <a class="dropdown-item" href="archivados">Consultar Presupuestos Archivados</a>       
      </li>
     
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         	Datos De Acceso
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="cambiarPsw">Cambiar Contraseña</a>

      </li>
       <li class="nav-item dropdown">
        <a class="nav-link" href="logout"  role="button"  aria-haspopup="true" aria-expanded="false">
         	Cerrar Sesión
        </a>
      </li>
    </ul>
    <form class="form-inline">
                    <p><a href="principal" class="btn btn-primary btn-sm">Volver Pantalla Principal</a></p>       
        </form>
  </div>
</nav>';
