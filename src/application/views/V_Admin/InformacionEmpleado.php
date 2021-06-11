<?php
echo'

<div class="container p-5">

<div class="row">
<div class="col-12">
<h3>Información Empleado</h3>
<img src="'.base_url("assets/Media/img/actualizarDato.jpg").'"  class="img-fluid" alt="dentista">
</div>
<div class="col-12">';
if(isset($_SESSION['modificado'])){
	echo'<div class="alert alert-success" role="alert">
		'.$_SESSION['modificado'].'
</div>';
}
echo'
<!--Formulario-->
<form action="actualizado" id="updateUser" method="POST">
  <div class="form-group row">
    <label class="col-12 col-form-label">Nombre</label>
    
    <div class="col-12">
      <input type="text" name="name" class="form-control" id="name" maxlength="60" placeholder="Introduce Nombre" value="'.$datoEmpleado[0]['nombre'].'" onblur="validarNombre()">
      <p id="errorName"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-12 col-form-label">Apellidos</label>
     <div class="col-12">
      <input type="text" class="form-control" name="surname" id="surname" maxlength="60" placeholder="Introduce Apellido" value="'.$datoEmpleado[0]['apellidos'].'" onblur="validarApellido()">
       	<p id="errorSurname"></p>
      </div>
   </div>
   
  <div class="form-group row">
    <label class="col-12 col-form-label">Teléfono</label>
    <div class="col-12">
      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Introduce Teléfono (6XXXXXXXX)" value="'.$datoEmpleado[0]['telefono'].'" onblur="validarTelefono()">
      <p id="errorTlf"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label  class="col-12 col-form-label">DNI</label>
    <div class="col-12">
      <input type="text" class="form-control" name="DNI" id="DNI" placeholder="Introduce DNI"  value="'.$datoEmpleado[0]['DNI'].'" disabled>
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-12 col-form-label">Número colegiado</label>
      <div class="col-12">
     	 <input type="text" class="form-control" name="colegiado" id="colegiado"  placeholder="Introduce Número colegiado" value="'.$datoEmpleado[0]['numColegiado'].'" disabled>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-12 col-form-label">E-mail</label>
    <div class="col-12">
      <input type="mail" class="form-control" name="mail" maxlength="100"  id="mail"  placeholder="Introduce correo Eléctronico" value="'.$datoEmpleado[0]['email'].'" onblur="validarCorreo()">
      <p id="errorMail"></p>
    </div>
  </div>
  
    </div>
  </div>
   <div class="form-group row">
    <div class="col-sm-10">
      <input type="button" class="btn btn-primary" value="Actualizar" onclick="actualizarDatosUsuario()" >
    </div>
  </div>

</form>
</div>
</div>

        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/validarForm.js").'"></script>';
