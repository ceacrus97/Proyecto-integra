	<!--Encabezado de la pagina-->
	<header>
	<!---Barra de navegacion-->
		<nav class="navbar navbar-expand-md bg-dark fixed-top" id="navegador"> <!--Fixed-top hace que la barra quede fija en la parte superior-->
		<!--Logo-->
			<a class="navbar-brand" href="#">
	    		<img src="imagenes/logo.png" alt="Logo" style="width:30px;">
			</a>
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Melilla integra</a>
				</li>
			</ul>
			<!--Esto me permite que la caja busqueda y el boton de busqueda aparezca en un boton en caso de pantalla pequeña-->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#busqueda">
		    <i class='fas fa-stream'></i>
		  </button>
		 <!-- Enlaces del navegador-->
		 	<div class="collapse navbar-collapse" id="busqueda">
		 		<ul class="navbar-nav mr-auto">
				</ul>
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" id="index" href="index.php">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="evento" href="eventos.php">Eventos</a>
					</li>

					<li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" id="usuarios" href="#">Usuario</a>

				        <ul class="dropdown-menu">
				         	<li><a href="reg_usu.php">Registro</a></li>
				          	<li><a href="inicio_sesion.php">Inicio sesion</a></li>
				          </ul>
				      </li>
				  
					<li class="nav-item">
						<a class="nav-link" id="cuentas" href="cuentas.php">Cuentas</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>