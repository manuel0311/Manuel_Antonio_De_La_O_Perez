<?php
echo'
<!DOCTYPE html>
<html>
  <head>
    <title>Factura Clínica Dental Higea</title>
    <meta charset="utf-8">
    <link  rel="icon"  href="'.base_url("assets/Media/img/logo.ico").'" type="image/ico" />
    <!--Estilos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="'.base_url("assets/css/estiloFactura.css").'"/>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="'.base_url("assets/Media/img/LogoFactura.png").'">
      </div>
      <div id="company">
        <h2 class="name">Clínica Higea Dental</h2>
        <div>Calle Marques de La Vega ,10 </div>
        <div>Puebla de la Calzada(Badajoz) 06490</div>
        <div><a href="mailto:contacto@higea-dental.com">contacto@higea-dental.com</a> <a href="tel:615182168">615 182 168</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Información Paciente:</div>
          <h2 class="name">'.$Paciente[0]['nombre'].' '.$Paciente[0]['apellidos'].'</h2>
          <div class="address">'.$Paciente[0]['DNI'].'</div><a href="tel:'.$Paciente[0]['telefono'].'">'.$Paciente[0]['telefono'].'</a>
          <div class="email"><a href="mailto:'.$Paciente[0]['email'].'">'.$Paciente[0]['email'].'</a></div>
        </div>
        <div id="invoice">
          <h1>Presupuesto Nº'.$servicios[0]['idPresupuesto'].'</h1>
          <div class="date">Fecha '.$servicios[0]['fechaPresupuesto'].'</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="unit">Pieza Dental</th>
            <th class="desc">Tratamiento</th>
            <th class="unit">Precio Base</th>
            <th class="qty">Incremento</th>
            <th class="total">Total</th>
          </tr>
        </thead>
        <tbody>';
         $total=floatval(0);
         foreach ($servicios as $valor){
			echo' <tr>
            <td class="unit">'.$valor['numPiezaDental'].'</td>
            <td class="desc">'.$valor['nombreTratamiento'].'</td>
            <td class="unit">'.$valor['precio'].'€</td>
            <td class="qty">'.$valor['precioExtra'].'€</td>
            <td class="total">'.$suma=$valor['precio']+$valor['precioExtra'].'€</td>
          </tr>';
				$total=$total + floatval($suma);
		 }

        echo'</tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Precio sin IVA</td>
            <td>'.$total.'€</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">I.V.A.</td>
            <td>'.$servicios[0]['iva'].'%</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Total</td>
            <td>'.$servicios[0]['precioTotal'].'€</td>
          </tr>
        </tfoot>
      </table>
      <div>
        <img  class="img-fluid" src="'.base_url("assets/Media/img/dentadura.jpg").'" alt="piezas dentales y su numeracion">
      </div>
    </main>
    <footer>
  	 <p>CLÍNICA DENTAL HIGEA TODOS LOS DERECHOS RESERVADOS</p>
    </footer>

<!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/validarForm.js").'"></script>

  </body>
</html>';
