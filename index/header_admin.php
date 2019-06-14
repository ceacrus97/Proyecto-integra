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
				<ul class="navbar-nav">
					<?php
						echo "<div class='dropdown'><button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>".
								$_SESSION['usuario'].
								 "<span class='caret'></span></button><ul class='dropdown-menu'>".
								"<li><a href='php/cerrar_sesion.php'>cerrar sesion</a></li>".
								"</ul></div>";
					?>
				</ul>

				</ul>
			</div>
		</nav>
	</header>