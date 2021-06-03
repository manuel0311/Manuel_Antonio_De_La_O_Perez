<?php
echo'

<div class="container p-5">
<h5>Historial Paciente </h5>
<p>Selecione el servicio para actualizar su fecha o añadir</p>
<!--Formulario-->
<form action="verHistorial"  method="POST">
  <div class="form-group row">
  </div>
 <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nombre Servicio</th>
      <th scope="col">Pieza/as Dental/es</th>
      <th scope="col">Fecha Realización</th>
    </tr>
  </thead>
  <tbody>';
foreach ($historial as $valor){
	echo' <tr>
      <th scope="row"><input type="radio" name="idTratamientoPaciente" value="'.$valor['idTratamientoPaciente'].'"></th>
      <td>'.$valor['nombreTratamiento'].'</td>
      <td>'.$valor['numPiezaDental'].'</td>';
	if(empty($valor['fechaRealizado'])){
		echo'<td>Pediente <input type="date" name="fecha" step="1"  min="2019-01-01" value="'.date("Y-m-d").'"></td>';
	}else{
		echo '<td>'.$valor['fechaRealizado'].' '.'<input type="date" name="fecha" step="1"  min="2019-01-01" value="'.date("Y-m-d").'"></td>';
	}
	echo'</tr>';
}
echo' </tbody>
</table>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary" value="Añadir /Actualizar ">
      <button class="btn btn-primary" ><a href="consultarPaciente" style="color:white">volver</a></button>                     	  

    </div>
  </div>
</form>
</div>
        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/validarForm.js").'"></script>

   </body>
</html>';
