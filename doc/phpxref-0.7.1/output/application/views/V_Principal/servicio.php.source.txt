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
            <h1 class="text-capitalize text-white">Nuestros Servicios</h1>
        </header>

     
     <!--informacion Tratamientos (Servicio)-->
     <section>
     <div class="container py-4">
        <div class="row">
            <div class="col-sm">
                 <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="'.base_url("assets/Media/img/corona-dental-1024x639.jpg").'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Corona Dental</h5>
                        <p class="card-text">Disponible en Porcelana.</p>
                     </div>
                 </div>
            </div>
            
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="'.base_url("assets/Media/img/empaste-dental-1024x639.jpg").'" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Empastes</h5>
                    <p class="card-text">45€</p>
            </div>
          </div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="'.base_url("assets/Media/img/endodoncia-1024x639.jpg").'" alt="Card image cap">
            <div class="card-body">
                 <h5 class="card-title">Endodoncia</h5>
                 <p class="card-text">Desde 45€</p>
            </div>
        </div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="'.base_url("assets/Media/img//exodoncia-1024x639.jpg").'" alt="Card image cap">
            <div class="card-body">
                 <h5 class="card-title">Exodoncia</h5>
                 <p class="card-text">Consulte precio</p>
        </div>
        </div>
        </div>
        
         <div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="'.base_url("assets/Media/img/reendodoncia-390x200.jpg").'" alt="Card image cap">
            <div class="card-body">
                 <h5 class="card-title">Reendodoncia</h5>
                 <p class="card-text">Desde 60€</p>
        </div>
        </div>
        </div>
        
         <div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="'.base_url("assets/Media/img//sarro-dental-390x200.jpg").'" alt="Card image cap">
            <div class="card-body">
                 <h5 class="card-title">Limpieza Dental</h5>
                 <p class="card-text">Primera visita GRATUITA</p>
        </div>
        </div>
        </div>
  </div>
</div>
    
        
    </section>
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
