<?php
echo'
<body>
 
  		<!-Carrousel-->
        <section class="row justify-content-center mt-5 ">
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



        <header class="row bg-dark justify-content-center mt-3 mb-3">
            <h1 class="text-capitalize text-white">Primera visita + Revisión dental + Radiografía = GRATIS</h1>
        </header>
        
 	<div class="container p-4">
           <div class="row">
               <div class="col-md-6 col-xs-12 ">
                   <img src="'.base_url("assets/Media/img/team-1.jpg").'" alt="equipo de profesionales de la clinica dental" class="img-fluid">
               </div>
               <div class="col-md-6 col-xs-12 ">
                   <p class="text-justify">

					   Un amplio equipo de profesionales, en esta especialidad, más de 50 especialistas al servicio del paciente, para ofrecerle los mejores tratamientos en Odontología General, Implantología, Ortodoncia,
                       Cirugía así como en odontopediatría.

                   </p>

                   <p class="text-justify">

						Junto al equipo de Doctores, Higienistas y Auxiliares, al que ya hemos hecho referencia, se encuentra la figura del Responsable de Clínica, quien se encarga de velar por la organización y el buen
                       funcionamiento de la clínica y por poner al alcance del paciente todas las facilidades posibles para llevar a cabo su tratamiento.
                   </p>
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


</html>';
