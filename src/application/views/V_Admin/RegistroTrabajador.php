<?php
echo'
<div class="container p-4">
<div class="row">
<div class="col-xs-12 col-sm-4 .col-lg-5">
<img src="'.base_url("assets/Media/img/dentis.png").'"  class="img-fluid" alt="dentista con el uniforme de trabajo">
</div>
<div class="col">
<h3>Formulario Registro Empleados</h3>';

if(isset($texto)){
	echo'<div class="alert alert-secondary" role="alert">
		'.$texto.'
</div>';
}
	
	
echo '

<!--Formulario-->
<form action="envioDatosTrabajador" id="formularioTrabajador" method="POST">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombre</label>
    
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" maxlength="60" placeholder="Introduce Nombre" onblur="validarNombre()" required>
      <p id="errorName"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Apellidos</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" name="surname" id="surname" maxlength="60" placeholder="Introduce Apellido" onblur="validarApellido()" required>
    	<p id="errorSurname"></p>
      </div>
   </div>
   
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Introduce Teléfono (6XXXXXXXX)" onblur="validarTelefono()" required >
       <p id="errorTlf"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label  class="col-sm-2 col-form-label">DNI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="DNI" id="DNI" placeholder="Introduce DNI"  onblur="validarDNI()" required>
       <p id="errorDNI"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Número colegiado</label>
      <div class="col-sm-10">
     	 <input type="text" class="form-control" name="colegiado" id="colegiado" onblur="validarNumColegiado()" placeholder="Introduce Número colegiado">
      	   <p id="errorColegiado"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-10">
      <input type="mail" class="form-control" name="mail" maxlength="100"  id="mail" onblur="validarCorreo()" placeholder="Introduce correo Eléctronico" >
      <p id="errorMail"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Contraseña</label>
     <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Introduce Cotraseña" >
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Repetir Contraseña</label>
     <div class="col-sm-10">
      <input type="password" name="password2" class="form-control" id="password2"  onblur="contraseniaValida()" placeholder="Introduce Cotraseña">
       <p id="errorContrasenia"></p>
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="button" class="btn btn-primary" value="Añadir Trabajador" onclick="addEmpleado()" >
      <input type="reset" class="btn btn-primary" >
    </div>
  </div>
</form>
</div>
</div>
</div>

        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 	<script src="'.base_url("assets/js/validarForm.js").'"></script>

  	
';
