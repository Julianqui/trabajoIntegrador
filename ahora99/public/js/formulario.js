// (function(){
	var formulario = document.getElementById('formulario'),
		email = formulario.email,
		username = formulario.username,
		edad = formulario.edad,
		pais = formulario.pais,
		error = document.getElementById('error');

	function validarEmail(e){
		if(email.value == '' || email.value == null){
			console.log('Por favor completa el email');
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el email</li>';

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarUsername(e){
		if(username.value == '' || username.value == null){
			console.log('Por favor completa el correo');
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el usuario</li>';

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarEdad(e){
		if(edad.value == '' || edad.value == null){
			console.log('Por favor completa la edad');
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa la edad</li>';

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	// function validarPais(e){
	// 	if (terminos.checked == false){
	// 		console.log('Por favor acepta los terminos');
	// 		error.style.display = 'block';
	// 		error.innerHTML += '<li>Por favor acepta los terminos</li>';

	// 		e.preventDefault();
	// 	} else {
	// 		error.style.display = 'none';
	// 	}
	// }

	function validarFormulario(e){
		error.innerHTML = '';

		validarEmail(e);
		validarUsername(e);
		validarEdad(e);
		//validarTerminos(e);
	}

	formulario.addEventListener('submit', validarFormulario);
// }())