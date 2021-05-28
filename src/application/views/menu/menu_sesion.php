<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo '<!DOCTYPE html>
<html lang="es">

<head>
	<title>Higea Dental</title>
	<meta charset="utf-8">
	<link  rel="icon"  href="'.base_url("assets/Media/img/logo.ico").'" type="image/ico" />
	<!--Estilos -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="'.base_url("assets/css/estilo.css").'">
	   
</head>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="'.base_url("principal").'" ><img class="" src="'.base_url("assets/Media/img/logo-clinica.png").'"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
         <a href="'.base_url("principal").'" class="nav-link">Inicio</a>
      </li>
       
       <li>
         <a href="'.base_url("tratamientos").'" class="nav-link">Tratamientos</a>
      </li>
       <li>
         <a href="'.base_url("Higea_nosotros").'" class="nav-link">Higea Dental</a>
      </li>
       <li>
       <a href="'.base_url("contacto").'" class="nav-link">Contacto</a>
      </li>
    </ul>  
       <form class="form-inline">
                    <p><a href="opciones" class="btn btn-primary btn-sm">Panel Usuario</a></p>
                    <p><a href="logout" class="btn btn-primary btn-sm">Cerrar Sesión</a></p>
        </form>
  </div>  
     </nav>
';


