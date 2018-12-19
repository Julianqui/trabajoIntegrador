@extends('template.base')

@section('title', 'Registrate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Regístrate</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date') }}">

                                @if ($errors->has('birth_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>








                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row">
                          <label style="margin-left:35%;">Elegí tu país:</label>
                          <select class="form-control" name="pais" id="paises" style="width:46%; margin-left:35%;">
                            <option value="">Elegí un país</option>
                          </select>
                          <img src="" width="100" id="flag" style="width:30%; margin-left:35%;">
                        </div>
                        <div class="form-group" style="display: none;" id="provCont">
                          <label style="margin-left:35%;">Elegí la provincia:</label>
                          <select class="form-control" name="provincia" id="provincias" style="width:46%; margin-left:35%;">
                          </select>
                        </div>
                    </form>
                    <!-- <div class="row justify-content-center"> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>






<script>
var selectPaises = document.getElementById('paises');
var selectProvincias = document.getElementById('provincias');
var provCont = document.getElementById('provCont');
var theImg = document.getElementById('flag');

const fetchGenerico = (url, callback) => {
  fetch(url)
    .then(response => response.json())
    .then(data => callback(data))
    .catch(error => console.log(error));
};

function setPaises (info) {
  info.forEach(function (position) {
    selectPaises.innerHTML += `<option data-img="${position.flag}"> ${position.name}</option>`;
  });
}

function setProvincias (info) {
  info.forEach(function (position) {
    selectProvincias.innerHTML += '<option>' + position.state + '</option>';
  });
}

fetchGenerico('https://restcountries.eu/rest/v2/all', setPaises);

selectPaises.addEventListener('change', function () {
  var theOptions = this.options;
  theImg.setAttribute('src', theOptions[this.selectedIndex].getAttribute('data-img'));
  if (this.value === 'Argentina') {
    provCont.style.display = 'block';
    fetchGenerico('https://dev.digitalhouse.com/api/getProvincias', setProvincias);
  } else {
    provCont.style.display = 'none';
    selectProvincias.innerHTML = '';
  }
});
</script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
