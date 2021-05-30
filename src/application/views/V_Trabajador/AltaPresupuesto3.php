<?php
print_r($_POST);


echo '
<div class="container p-4" xmlns="http://www.w3.org/1999/html">
<h3>Añadir Servicio</h3>
<p>Pulse añadir para añadir el servicio al paciente ,pulse finalizar cuando termine de añadir los servicios para terminar el presupuesto.</p>
	<div class="row">
		<div class="col-xs-12 col-sm-4 .col-lg-5">
			<img src="' .base_url("assets/Media/img/Presupuesto.jpg").'"  class="img-fluid" alt="dentista con el uniforme de trabajo">
</div>

<div class="col">

<!--Formulario-->
<form action="AddServicioPresupuesto" id="" method="POST">
  <div class="form-group row">
		<label class="col-sm-2 col-form-label">tipo</label>
		<div class="col-sm-10">
		<input type="radio" name="tipoServicio" value="prueba" onclick="mostrarOpcionesPruebas()" disabled> Prueba</br>
		<input type="radio" name="tipoServicio" value="tratamientos" onclick="mostrarOpcionesTratamientos()" >Tratamientos
		
		   <p id="errorTipo"></p>
		</div>
	  </div>
	  
	  <div class="form-group row" id="listadoPruebas" style="display: none;">
			 <label class="col-sm-2 col-form-label">Pruebas</label>
   		 <div class="col-sm-10">
       <select name="pruebas" id="pruebasOpciones"  >
       <option value=" ">Seleccione Prueba</option>
		';
			foreach ($ListaPruebas as $valor)
			{
				echo '<option value="'.$valor['idPrueba'].'">'.$valor['nombrePrueba'].'</option>';

			}
			echo'	
		  </select>
    </div>
  </div> 
	  
	  <div class="form-group row" id="listadoTratamiento" style="display: none;>
   		 <label class="col-sm-2 col-form-label">Tratamientos</label>
   		 <div class="col-sm-10">
       <select name="tratamientos" id="tratamientosOpciones">
       <option value=" ">Seleccione Tratamiento</option>
		';
			foreach ($ListaTratamientos as $valor)
			{
				echo '<option name="tratamientos" value="'.$valor['idTratamiento'].'">'.$valor['nombreTratamiento'].'</option>';

			}
			echo'	
		  </select>
    </div>
  </div> 
	  
	  <div class="form-group row" id="piezaDental" style="display: none;>
   		 <label class="col-sm-2 col-form-label">Piezas Dentales</label>
   		 <div class="col-sm-10" id="PiezaDental">
   		 <p> Tratamientos que afecta toda la dentadura equivale a 0</p>';

			foreach ($dientes as $valor)
			{
				echo '<input type="checkbox" name="dientes_lista[]" value="'.$valor['numPiezaDental'].'">'.$valor['numPiezaDental']." ".'</input>';

			}
			echo'	
    </div>
  </div> 
  
	  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
      <input type="tel" name="price" class="form-control" id="price" placeholder="Introduce coste servicio " onblur="validarPrecio()" required >
       <p id="errorPrice"></p>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <input type="button" class="btn btn-primary" value="Añadir" onclick="completarPresupuesto()" >
      <button class="btn btn-primary" id="finalizar" style="display: none;><a href="finPresupuesto" style="color:white" id="finalizar" >Finalizar</a></button>
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

