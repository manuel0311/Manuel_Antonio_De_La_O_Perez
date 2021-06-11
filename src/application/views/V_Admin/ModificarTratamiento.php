<?php
print_r($_POST);
echo'
<div class="container p-4">

<div class="row">
<div class="col-xs-12 col-sm-5 .col-lg-8">
<img src="'.base_url("assets/Media/img/TratamientoPrueba.jpg").'"  class="img-fluid" alt="dentista con el uniforme de trabajo">
</div>
<div class="col-xs-12 col-sm-7 .col-lg-6">

<!--Formulario-->
<form action="modificarTratamiento" id="updateServicio" method="POST">
	
	  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombre Servicio</label>
    <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" value="'.$datos[0]['nombreTratamiento'].'"  placeholder="Nombre del Tratamiento o Prueba" onblur="validarNombre()">
      <p id="errorName"></p>
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Descripción del servicio</label>
     <div class="col-sm-10">
           <textarea class="form-control" name="texto"  id="texto"  onblur="validarTexto()" required>'.$datos[0]['descripcionTratamiento'].'" </textarea>
    	<p id="errorText"></p>
      </div>
   </div>
   
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
      <input type="tel" name="price" class="form-control" id="price" value="'.$datos[0]['precio'].'" onblur="validarPrecio()" required >
       <p id="errorPrice"></p>
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="button" class="btn btn-primary" value="Actualizar" onclick="actualizarServicio()" >

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
