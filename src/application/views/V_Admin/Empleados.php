<?php
echo'

<div class="container p-4">
	<div class="row">
		<div class="col-xs-12 col-sm-6 .col-lg-7">
			<img src="'.base_url("assets/Media/img/AddPaso2.png").'"  class="img-fluid" alt="Empleados de la clínica Higea.">
</div>

<div class="col">
<!--Formulario-->
<form action="empleadoDatos"  method="POST">
  <div class="form-group row">
  </div>';

echo' <h3>EMPLEADOS HIGEA</h3>
<div class="table-wrapper-scroll-y my-custom-scrollbar">

  <table class="table table-bordered table-striped mb-0">
    <thead>
      <tr>
        <th scope="col">Selección</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Numero Colegiado</th>
      </tr>
    </thead>
    <tbody>';
     foreach ($datos as $valor){
     	echo'
		  <tr>
			<th scope="row"><input type="radio" name="empleado" value="'.$valor['idUsuario'].'"></th>
			<td>'.$valor['nombre'].'</td>
			<td>'.$valor['apellidos'].'</td>
			<td>'.$valor['numColegiado'].'</td>
		  </tr>';

	 }

   echo' </tbody>
  </table>
  <div class="form-group row">
    <div class="col-sm-10">
      <br>
      <input type="submit" class="btn btn-primary"  name="modificar" value="Modificar">
     <input class="btn btn-primary" data-toggle="modal" data-target="#eliminar" type="button" value="Eliminar">
    </div>
  </div>
</div>

  
  <section class="modal" id="eliminar">
            <div class="modal-dialog">
                <form>
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <div class="modal-title">
								Eliminar Empleado
							</div>
                            <span data-dismiss="modal">X</span>
                        </div>
                       <div class="modal-footer text-center">
                       <h5>¿Desea eliminar la prueba asignada?</h5>
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
