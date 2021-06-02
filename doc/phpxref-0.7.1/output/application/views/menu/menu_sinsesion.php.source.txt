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
                    <input class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#entrar" type="button" value="Iniciar Sesión">
                    <input class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registro" type="button" value="Registro">
                </form>
  </div>  
     </nav>
     
<!-- VENTANA MODAL INICIO SESIÓN -->
        <section class="modal" id="entrar">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <div class="modal-title">Iniciar Sesión</div>
                        <span data-dismiss="modal">X</span>
                    </div>
                    <form action="login" id="formLogin" method="post">
                        <div class="modal-body">';

									if(isset($texto)) {
										echo '<div class="alert alert-secondary" role="alert">' . $texto . '</div>';
									}
					echo '<div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" name="mail"  id="mail" placeholder="Introduce tu email" onblur="correovalidoLogin()" required>
                            	 <p id="errorMail"></p>
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" name="psw" id="psw" placeholder="Introduce tu contraseña" onblur="contraseniaVacia()" required>
                           	    <p id="errorPSW"></p>
                           	</div>     
                        </div>
                        <div class="modal-footer text-right">
                            <input type="button" class="btn btn-primary" value="Entrar" onclick="datosLogin()">
                            
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- VENTANA MODAL DE REGISTRO -->
        <section class="modal" id="registro">
            <div class="modal-dialog">
                <form>
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <div class="modal-title">
								Registro de usuario
							</div>
                            <span data-dismiss="modal">X</span>
                        </div>
                        <div class="modal-body">
                             <div class="form-group">
                                <label>DNI:</label>
                                <input type="name"  name="DNI"class="form-control" placeholder="Introuce tu DNI" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="mail" id="mail" class="form-control" placeholder="Introduce tu correo electrónico" required>
                            </div>
                           
                        </div>
                        <div class="modal-footer text-right">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>

                    </div>
                </form>
            </div>
        </section>';





