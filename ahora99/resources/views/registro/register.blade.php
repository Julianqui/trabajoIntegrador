
@include ('registro.header')
<div class="jumbotron">
	<h1>Registración</h1>
</div>



<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<form method="POST" action="register.php" enctype="multipart/form-data" id="formulario">
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input class="form-control" type="text" name="edad" id="edad">
			</div>
			<div class="form-group">
				<label for="pais">Pais:</label>
				<select id="pais" class="form-control" name="pais">

							<option  selected>

							</option>

							<option >

							</option>

				</select>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" class="form-control" type="password" name="password">
			</div>
			<div class="form-group">
				<label for="cpassword">Confirmar Password</label>
				<input id="cpassword" class="form-control" type="password" name="cpassword">
			</div>
			<div class="form-group">
				<label for="avatar">Foto de perfil:</label>
				<input id="avatar" class="form-control" type="file" name="avatar">
			</div>
			<ul class="error" id="error"></ul>
			<div class="form-group">
				<input class="btn btn-success" type="submit">
			</div>
		</form>
	</div>
</div>
<script src="js/formulario.js"></script>

@include ('registro.footer')
