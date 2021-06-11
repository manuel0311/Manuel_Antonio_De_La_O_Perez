<?php
 echo'
<div class="container p-4" class="contenedor">

<div class="col" style="text-align: center">
<h3>Introduce el DNI del Paciente que desea consultar sus Presupuestos.</h3>';

if(isset($texto)){
	echo'<div class="alert alert-secondary" role="alert">
		'.$texto.'
</div>';
}
echo'
<!--Formulario-->
<form action="consultarPresupuesto" method="post" id="seleccionarUsuario">
<label>Introduce DNI:</label>
<input type="text" placeholder="DNI del paciente" name="DNI" id="DNI" onblur="validarYComprobarDNI()" required >
<p id="errorDNI"></p>
<input type="button" value="Buscar Paciente" onclick="localizarIDPaciente()">
</form>
</div>
</div>

        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/validarForm.js").'"></script>
  	';
