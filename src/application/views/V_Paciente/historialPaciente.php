<?php
echo'

<div class="container p-4">
	<div class="row">
		<div class="col-xs-12 col-sm-5 .col-lg-7">
			<img src="'.base_url("assets/Media/img/Historial.jpg").'"  class="img-fluid" alt="Empleados atendiendo a un paciente.">
</div>

<div class="col-xs-12 col-sm-7 .col-lg-5">
<h3>Historial Clínica Higea Dental</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Servicio</th>
      <th scope="col">Pieza Dental</th>
      <th scope="col">Fecha Realizado</th>
    </tr>
  </thead>
  <tbody> ';
foreach ($Historial as $valor){
	echo'
   <tr>
      <th scope="row">'.$valor['nombreTratamiento'].'</th>
      <td>'.$valor['numPiezaDental'].'</td>';
	if($valor['fechaRealizado']==  NULL){
	 echo'<td>Pendiente</td>';
	}else{
		echo'<td>'.$valor['fechaRealizado'].'</td>';
	}
	echo'  </tr>';
}
echo'   
  </tbody>
</table>
</div>
</div>
</div>



        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/validarForm.js").'"></script>
  	';
