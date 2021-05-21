<?php
echo'
<div class="container p-4">
<div class="row">

<div class="col-xs-12 col-sm-4 .col-lg-5">
<h3>Busqueda Empleados</h3>
<img src="'.base_url("assets/Media/img/buscar.png").'"  class="img-fluid" alt="dentistas con el uniforme de trabajo">
</div>

<div class="col">

<!--Formulario-->
<form action="envioDatosTrabajador" id="formularioTrabajador" method="POST">
  <div class="form-group row">
    <label class="col-12 col-form-label">Introduce Apellido del Empleado</label>
    
    <div class="col-12">
      <input type="text" name="apellido" class="form-control" id="apellido" maxlength="60" placeholder="Introduce Apellido"  required>
      <p id="errorName"></p>
    </div>
  </div>
  
  
   
 
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="button" class="btn btn-primary" value="Buscar Trabajador"  >
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
