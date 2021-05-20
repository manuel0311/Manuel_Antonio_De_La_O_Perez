<?php
echo'

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


  <header class="row bg-dark justify-content-center mt-3 mb-3">
            <h1 class="text-capitalize text-white">¿Quieres hablar con nosotros?</h1>
        </header>

        <!-- LIST GROUP COMO TAB-PANEL -->
        <section class="row justify-content-center py-4">
            <div class="col-md-5">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" data-target="#cita">Pedir Cita</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" data-target="#Proveedor">Proveedor</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="cita">
                        <form>
                            <div class="form-group">
                                <label>Nombre & Apellidos del Paciente:</label>
                                <input type="email" class="form-control" placeholder="Introduce nombre y apellidos">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Introduce tu correo">
                            </div>
                             <div class="form-group">
                                <label>Teléfono contacto:</label>
                                <input type="tel" class="form-control" placeholder="Introduce tu teléfono">
                            </div>
                            <div class="form-group">
                                <label>Tu problema:</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="text-right">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>

                        </form>
                    </div>
                    <div class="tab-pane fade" id="Proveedor">
                        <form>
                            <div class="form-group">
                                <label>Nombre de la empresa:</label>
                                <input type="text" class="form-control" placeholder="Introduce el nombre de la empresa">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Correo electrónico de contacto">
                            </div>
                            <div class="form-group">
                                <label>Listado de productos o equipamientos :</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="text-right">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                        </form>

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

';
?>
