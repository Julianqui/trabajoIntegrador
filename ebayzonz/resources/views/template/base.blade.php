@include ('configuracion')
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href={{ asset('/css/styles.css') }}>
		<link rel="stylesheet" href={{ asset('/css/app.css') }}>
	</head>
	<body>
		<header>

		  <a href="/libreria"><img class="isologotipo" src=@yield('imgurl') alt="logo IDEON"></a>


		</header>
		@include('partials.navbar')
		<article class="white_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>
		</div>
	</article>

		@include('footer')
		<script src={{ asset('/js/app.js') }}></script>
	</body>
</html>
