<?php
echo'
<div class="container p-4">
	<div class="row">
		<div class="col-xs-12 col-sm-4 .col-lg-5">
			<img src="'.base_url("assets/Media/img/Presupuesto.jpg").'"  class="img-fluid" alt="dentista con el uniforme de trabajo">
</div>

<div class="col">
<p>Introduce nombre de presupuesto y nota para dicho presupuesto.</p>
<!--Formulario-->
<form action="altaPresupuesto" id="AltaPresupuesto" method="POST">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombre Presupuesto</label>
    
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" maxlength="60" placeholder="Introduce Nombre presupuesto" onblur="validarNombre()" required>
      <p id="errorName"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nota</label>
     <div class="col-sm-10">
       <textarea class="form-control" name="texto"  id="texto" placeholder="Introduce nombre del Tratamiento o Prueba" onblur="validarTexto()" required></textarea>
    	<p id="errorText"></p>
      </div>
   </div>
  
 
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="button" class="btn btn-primary" value="Continuar"  onclick="altaPresupuesto()">
   
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
