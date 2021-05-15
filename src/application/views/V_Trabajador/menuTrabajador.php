<?php
echo'
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img class="" src="'.base_url("assets/Media/img/logo-clinica.png").'"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pacientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Registrar Paciente</a>
          <a class="dropdown-item" href="#">Consultar Paciente</a>
          <a class="dropdown-item" href="#">Eliminar Paciente</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Presupuestos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Crear Presupuesto</a>
          <a class="dropdown-item" href="#">Consultar Presupuesto</a>
          <a class="dropdown-item" href="#">Activar Presupuesto</a>
          <a class="dropdown-item" href="#">Eliminar Presupuesto</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         	Datos Usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Consultar Datos</a>
          <a class="dropdown-item" href="#">Modificar Datos</a>
          <a class="dropdown-item" href="#">Cambiar Contraseña</a>
      </li>
        <a class="nav-link" href="#"  role="button"  aria-haspopup="true" aria-expanded="false">
         	Cerrar Sesión
        </a>
      </li>
    </ul>
  </div>
</nav>';
