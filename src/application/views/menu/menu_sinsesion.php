<?php
echo'

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
        ';



echo'
<!-- VENTANA MODAL INICIO SESIÓN -->
        <section class="modal" id="entrar">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <div class="modal-title">Entra en sesión</div>
                        <span data-dismiss="modal">X</span>
                    </div>
                    <form>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu email">
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" placeholder="Introduce tu contraseña">
                            </div>     
                        </div>
                        <div class="modal-footer text-right">
                            <input type="submit" class="btn btn-primary" value="Entrar">
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
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Introduce tu correo electrónico" required>
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer text-right">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>

                    </div>
                </form>
            </div>
        </section>';




