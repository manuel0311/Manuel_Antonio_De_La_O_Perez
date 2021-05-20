<?php
echo '
<body>

    <class="container-fluid">
        
           <!-- CARRUSEL PUBLICITARIO -->
  <section class="row justify-content-center mt-5">
            <div class="col-md-9 mt-3">
                <div class="carousel slide" id="carrusel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 d-block" src="'.base_url("assets/Media/img/c1.jpg").'" alt="Primer elemento">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="'.base_url("assets/Media/img/c2.jpg").'" alt="Segundo elemento">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="'.base_url("assets/Media/img/c3.jpg").'"  alt="Tercer elemento">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="'.base_url("assets/Media/img/c4.jpg").'" alt="Cuarto elemento">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carrusel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carrusel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Posterior</span>
                    </a>
                    <ol class="carousel-indicators">
                        <li data-target="#carrusel" data-slide-to="0" class="active"></li>
                        <li data-target="#carrusel" data-slide-to="1"></li>
                        <li data-target="#carrusel" data-slide-to="2"></li>
                        <li data-target="#carrusel" data-slide-to="3"></li>
                    </ol>
                </div>
            </div>
        </section>


	<!-Barra medio->
  <header class="row bg-dark justify-content-center mt-3 mb-3">
            <h1 class="text-capitalize text-white">¿Por qué Higea?</h1>
        </header>

     
     <!--Descriocion trabajador clinica -->
    <div class="container py-4">
     <div class="row">
               <div class="col-md-6 col-xs-12 ">
                   <img src="'.base_url("assets/Media/img/team2.jpg").'" alt="equipo de profesionales de la clinica dental" class="img-fluid">
               </div>
               <div class="col-md-6 col-xs-12 ">
                  <p>Diseñada en un&nbsp;estilo&nbsp;minimalista en el que el blanco es el protagonista, se ha obtenido como resultado un espacio acogedor, que emana confianza, y sobre todo que resplandece; tal y como queremos que lo haga tu boca al salir por nuestra clínica dental .</p>
              	   </br></br>
              	   <p>Se conforma por&nbsp;un <strong>equipo de profesionales</strong> entre las distintas especialidades, incluyendo al personal de administración y asesoramiento a pacientes.</p>
                   </br></br>
                   <p>Ven sin compromiso a informarte del tratamiento que desees. saldrás sabiendo que has elegido la mejor opción, la mejor clínica de Puebla de la Calzada  para ti y tu familia.</p>
               </div>
           </div>
           <div class="row">
               <div class="col-md-6 col-xs-12 ">
                  <div class="wpb_wrapper">
                  </br></br>
			<ul>
				<li><strong>Trato cercano</strong><br>
				El mejor tratamiento solo puede venir de la mano del mejor trato</li>
				
				<li><strong>A tu lado</strong><br>
				Más de 90 clínicas donde comenzar o continuar tu tratamiento</li>
				
				<li><strong>Paga a tu ritmo</strong><br>
				Consulta condiciones de financiación en tu clínica más cercana.</li>
				
				<li><strong>Lo tienes todo</strong><br>
				Todos los tratamientos. Te ofrecemos un servicio centralizado e integral</li>
			</ul>
		<p>Creemos que <strong>tu salud es lo primero y más importante</strong>. Por eso ofrecemos una serie de <strong>servicios totalmente gratuitos:&nbsp;</strong>valoración y diagnóstico integral, revisión anual, revisión preventiva infantil, estudio periodontal, estudio de ortodoncia, consulta urgente preferente, etc.</p>

		</div>
               </div>
                <div class="col-md-6 col-xs-12 ">
                   <img src="'.base_url("assets/Media/img/team3.jpg").'" alt="equipo de profesionales de la clinica dental" class="img-fluid">
               </div>
           </div>
	 </div>     
    
      <!--Script -->
    
        <!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 	<script src="'.base_url("assets/js/Login.js").'"></script>
</body>

</html>
';
?>
