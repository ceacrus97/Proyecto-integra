	<!--Pie de pagina-->
	<footer>
		<!---Barra de navegacion-->
		<nav class="navbar navbar-expand-md bg-dark fixed-bottom" id="pie"> 
		<!--Fixed-bottom hace que la barra quede fija en la parte inferior-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#foot">
		 	<i class='fas fa-stream'></i>
		</button>
		 <!-- Enlaces del navegador-->
		 <div class="collapse navbar-collapse justify-content-center" id="foot">
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" id="mapa" href="mapa.php">Mapa de sitio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">&copy; <?php echo date("Y"); ?></a>
				</li>
			</ul>
		</div>
		</nav>
	</footer>