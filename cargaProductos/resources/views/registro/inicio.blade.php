
	@include ("registro/header")

	<h1>Inicio</h1>
	<h2>Bienvenido </h2>

	 
		<div>
			<a href="producto.php">

					echo $productos[$i];

			</a>
		</div>


	<h2> Usuarios </h2>


		<div>
			<a href="miPerfil.php">

					echo $usuario->getEmail();

			</a>
		</div>




	@include ('registro/footer')
