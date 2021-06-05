<?php
echo'

<div class="container p-4">
	<div class="row">
		<div class="col-xs-12 col-sm-4 .col-lg-5">
			<img src="'.base_url("assets/Media/img/consultarPresupuesto.jpg").'"  class="img-fluid" alt="clínica dental desde dentro.">
</div>

<div class="col">
<!--Formulario-->
<form action="download"  method="POST">
  <div class="form-group row">
  </div>
  <p>Selecciona el presupuesto que deseas descargar</p>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Selecione Presupuesto</th>
      <th scope="col">Nombre Presupuesto</th>
      <th scope="col">Precio Total</th>
      <th scope="col">Fecha Presupuesto</th>
    </tr>
  </thead>
  <tbody>';
 foreach ($listado as $valor){
   echo' <tr>
      <th scope="row"><input type="radio" name="presupuesto" value="'.$valor['idPresupuesto'].'"></th>
      <td>'.$valor['nombrePresupuesto'].'</td>
      <td>'.$valor['precioTotal'].'€</td>
      <td>'.$valor['fechaPresupuesto'].'</td>';

  echo'</tr>';
}
 echo' </tbody>
</table>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary" value="Descargar">
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
