<?php
echo'
<div class="container p-5">

<div class="row">
<div class="col-xs-12 col-sm-5 .col-lg-6">
<img src="'.base_url("assets/Media/img/Datos.png").'"  class="img-fluid" alt="dentista">
</div>
<div class="col">
<h3>Datos Usuario</h3>
<!--Formulario-->
<form action="" id="" method="POST">
  <div class="form-group row">
    <label class="col-12 col-form-label">Nombre</label>
    
    <div class="col-12">
      <input type="text" name="name" class="form-control" id="name" maxlength="60" placeholder="Introduce Nombre" value="'.$nombre.'">

    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-12 col-form-label">Apellidos</label>
     <div class="col-12">
      <input type="text" class="form-control" name="surname" id="surname" maxlength="60" placeholder="Introduce Apellido" value="'.$apellidos.'">
   
      </div>
   </div>
   
  <div class="form-group row">
    <label class="col-12 col-form-label">Télefono</label>
    <div class="col-12">
      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Introduce Teléfono (6XXXXXXXX)" value="'.$telefono.'">

    </div>
  </div>
  
   <div class="form-group row">
    <label  class="col-12 col-form-label">DNI</label>
    <div class="col-12">
      <input type="text" class="form-control" name="DNI" id="DNI" placeholder="Introduce DNI"  value="'.$DNI.'">

    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-12 col-form-label">E-mail</label>
    <div class="col-12">
      <input type="mail" class="form-control" name="mail" maxlength="100"  id="mail"  placeholder="Introduce correo Eléctronico" value="'.$email.'">

    </div>
  </div>
  
</form>
<p>Para cambiar sus datos pulse en modificar datos en el menú de arriba.</p>
</div>
</div>
</div>
        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/validarForm.js").'"></script>

   </body>
</html>';
