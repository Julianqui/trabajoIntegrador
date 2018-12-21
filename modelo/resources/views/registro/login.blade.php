@include ('registro/header')
<div class="jumbotron">
	<h1>Login</h1>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<ul class="errores">
		
		</ul>
		<form method="POST" action="login.php" enctype="multipart/form-data" class="contacto">
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email" value="">
				<div class="invalid-feedback"></div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" class="form-control" type="password" name="password">
			</div>
			<div class="form-group">
				<label for="recordame">Recordame</label>
				<input type="Checkbox" name="recordame">
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit">
				<br><br>
				<a href="olvidar.php">Olvide mi password</a>
			</div>
		</form>
	</div>
</div>


@include ('registro.footer')
<script src="../js/formulario.js"></script>
