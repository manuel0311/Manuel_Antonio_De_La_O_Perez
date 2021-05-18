<?php

 echo'
<div class="container p-4">
	<div class="row">
		<div class="col-xs-12 col-sm-4 .col-lg-5">
			<img src="'.base_url("assets/Media/img/paciente.png").'"  class="img-fluid" alt="dentista con el uniforme de trabajo">
</div>

<div class="col">
<h3>Formulario Registro Paciente</h3>';
if(isset($texto)){
	echo'<div class="alert alert-secondary" role="alert">
		'.$texto.'
</div>';
}
echo'
<!--Formulario-->
<form action="envioDatosPaciente" id="formularioPaciente" method="POST">
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
    <label class="col-sm-2 col-form-label">Télefono</label>
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
      <input type="button" class="btn btn-primary" value="Añadir Paciente" onclick="addPaciente()" >
      <input type="reset" class="btn btn-primary" >
    </div>
  </div>
</form>
</div>
</div>
</div>';
