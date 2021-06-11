<?php
echo'

<div class="container p-4">
	<div class="row">
		<div class="col-xs-12 col-sm-4 .col-lg-5">
			<img src="'.base_url("assets/Media/img/consultarPresupuesto.jpg").'"  class="img-fluid" alt="clínica dental desde dentro.">
</div>

<div class="col">
<!--Formulario-->
<form action="panelTratamiento"  method="POST">
  <div class="form-group row">
  </div>';

echo' <p>Listado Tratamientos</p>
<div class="table-wrapper-scroll-y my-custom-scrollbar">

  <table class="table table-bordered table-striped mb-0">
    <thead>
      <tr>
        <th scope="col">Selección</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>';
     foreach ($tratamiento as $datos){
     	echo'
		  <tr>
			<th scope="row"><input type="radio" name="tratamiento" value="'.$datos['idTratamiento'].'"></th>
			<td>'.$datos['nombreTratamiento'].'</td>
			<td>'.$datos['descripcionTratamiento'].'</td>
			<td>'.$datos['precio'].'</td>
		  </tr>';

	 }

   echo' </tbody>
  </table>

</div>
   </br>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary"  name="modificar" value="Modificar">
     <input class="btn btn-primary" data-toggle="modal" data-target="#eliminar" type="button" value="Eliminar">
    </div>
  </div>
  
  <section class="modal" id="eliminar">
            <div class="modal-dialog">
                <form>
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <div class="modal-title">
								Eliminar Paciente
							</div>
                            <span data-dismiss="modal">X</span>
                        </div>
                       <div class="modal-footer text-center">
                       <h5>¿Desea eliminar el tratamiento asignado?</h5>
                       </div>
                       
                       <div class="alert alert-warning" role="alert">
						 Al pulsar Si, se eliminarán los datos.
						  Esta Información no se podrá recuperar .
					   </div>
                     	 <div class="modal-footer text-right">
    				     <input type="submit" class="btn btn-primary"  name="eliminar" value="Sí">
						 <span data-dismiss="modal"><input type="button" class="btn btn-primary" value="NO"></span>
					</div>
                    </div>
                </form>
            </div>
        </section>
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
