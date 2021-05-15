echo'

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="'.base_url("principal").'" ><img class="" src="'.base_url("assets/Media/img/logo-clinica.png").'"/></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li>
				<a href="'.base_url("principal").'" class="nav-link">Inicio</a>
			</li>

			<li>
				<a href="'.base_url("tratamientos").'" class="nav-link">Tratamientos</a>
			</li>
			<li>
				<a href="'.base_url("Higea_nosotros").'" class="nav-link">Higea Dental</a>
			</li>
			<li>
				<a href="'.base_url("contacto").'" class="nav-link">Contacto</a>
			</li>
		</ul>
		<form class="form-inline">
			<input class="btn btn-primary btn-sm mr-2" data-toggle="modal"  type="button" value="Menu Usuario">
			<input class="btn btn-primary btn-sm" data-toggle="modal"  type="button" value="Cerrar Sesión">
		</form>
	</div>
</nav>
';

