<?php
echo '
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Administración</title>
	   <!--Estilos -->	
    <link rel="stylesheet" href="'.base_url("assets/css/cssLoginAdministador.css").'"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
   

    
    <div class="fadeIn first">
      <img class="" src="'.base_url("assets/Media/img/logo-clinica.png").'"/>
    </div>

    <!-- Formulario Login Administrador -->
    <form action="loginAdmin" id="formLogin" method="post">';
			if(isset($texto)) {
				echo '<div class="alert alert-danger" role="alert">' . $texto . '</div>';
			}

    echo'
      <input type="email" name="mail"  id="mail" placeholder="Introduce tu email" onblur="correovalidoLogin()" required>
      <p id="errorMail"></p>
      <input type="password" id="psw" class="fadeIn third" name="psw" placeholder="Contraseña" onblur="contraseniaVacia()" required>
 	 <p id="errorPSW"></p>
      <input type="button" class="fadeIn fourth" value="Entrar" onclick="datosLogin()">
    </form>

  </div>
</div>

<!--Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="'.base_url("assets/js/Login.js").'"></script>
  	
';
