<?php
echo'<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Paso 3-Asignar I.V.A.</title>
	   <!--Estilos -->	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="'.base_url("assets/css/estilo.css").'"/>
</head>
<body>

<div class="container p-4">
<h3>Paso 3- Asignar porcentaje de I.V.A.</h3>
<p>Este porcentaje calculara el I.V.A. de los presupuestos, este porcentaje puede cambiarse desde
el panel de administración.</p>
<div class="row">
<div class="col-xs-12 col-sm-5 .col-lg-6">
<img src="'.base_url("assets/Media/img/ivaFoto.jpg").'"  class="img-fluid" alt="Sonrisa con dectadura sana">
</div>
<div class="col">

<!--Formulario-->
<form action="AsignarAdministrador" id="formularioAdministrador" method="POST">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Total Porcetaje</label>
    
    <div class="col-sm-10">
      <input type="text" name="porcentaje" class="form-control" id="porcentaje" maxlength="60" placeholder="Introduce porcentaje" onblur="validarPorcentaje()" required>
  		<p id="errorPorcentaje"></p>    </div>
  </div>
  
  
 
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="finalizar "value="finalizar" class="btn btn-primary " >
   
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
   </body>
</html>';
