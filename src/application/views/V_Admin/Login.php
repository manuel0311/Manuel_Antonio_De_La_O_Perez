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
    <form>
      <input type="email" id="login" class="fadeIn second" name="login" placeholder="Correo electronico ">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

  </div>
</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
';
