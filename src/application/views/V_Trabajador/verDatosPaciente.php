<?php
echo'
<div class="container p-5">

<div class="row">

<div class="col">
<h3>Datos Usuario</h3>';

if(isset($_SESSION['modificado'])){
	echo'<div class="alert alert-success" role="alert">'
		.$_SESSION['modificado'].'

</div>';
}
echo '
<!--Formulario-->
<form action="actualizarDatosUsuarios" id="updateUser" method="POST" xmlns="http://www.w3.org/1999/html">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombre</label>
    
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" maxlength="60" placeholder="Introduce Nombre" value="' .$nombre.'" onblur="validarNombre()">
  	  <p id="errorName"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Apellidos</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" name="surname" id="surname" maxlength="60" placeholder="Introduce Apellido" value="'.$apellidos.'" onblur="validarApellido()">
      <p id="errorSurname"></p>
      </div>
   </div>
   
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Introduce Teléfono (6XXXXXXXX)" value="'.$telefono.'" onblur="validarTelefono()">
      <p id="errorTlf"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label  class="col-sm-2 col-form-label">DNI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="DNI" id="DNI" placeholder="Introduce DNI"  value="'.$DNI.'" disabled>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-10">
      <input type="mail" class="form-control" name="mail" maxlength="100"  id="mail"  placeholder="Introduce correo Eléctronico" value="'.$email.'" onblur="validarCorreo()">
      <p id="errorMail"></p>
    </div>
  </div>
</form>
</div>
<div class="col-xs-12 col-sm-5 .col-lg-6">
 <input type="button" class="btn btn-primary" value="Actualizar" onclick="actualizarDatosUsuario()" >
 <input type="button" class="btn btn-primary" value="Historial"  >
 <input class="btn btn-primary" data-toggle="modal" data-target="#eliminar" type="button" value="Eliminar Paciente">
 <img src="'.base_url("assets/Media/img/LOGO.jpg").'"  class="img-fluid" alt="Logo clínica dental Higea">
</div>
</div>
</div>



        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/validarForm.js").'"></script>

   </body>
</html>
<!-- Alerta! Borrado -->
        <section class="modal" id="eliminar">
            <div class="modal-dialog">
                <form>
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <div class="modal-title">
								Eliminar Paciente
							</div>
                            <span data-dismiss="modal">X</span>
                        </div>
                       <div class="modal-footer text-center">
                       <h5>¿Desea eliminar la información del Paciente?</h5>
                       </div>
                       
                       <div class="alert alert-warning" role="alert">
						 Al pulsar Si, se eliminarán los datos del usuario.
						  Esta Información no se podrá recuperar .
					   </div>
                     	 <div class="modal-footer text-right">
						<button class="btn btn-primary" ><a href="eliminarPaciente" style="color:white">SÍ</a></button>                     	  
						 <span data-dismiss="modal"><input type="button" class="btn btn-primary" value="NO"></span>
					</div>
                    </div>
                </form>
            </div>
        </section>';
