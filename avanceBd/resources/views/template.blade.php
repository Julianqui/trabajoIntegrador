@include('head')
	<body>
		@include('navbar')
		{{-- Defino el espacio que tendrá la información inyectada --}}
		<div class="container">
			<div class="row">
				<div class="col-12">
					@yield('content')
				</div>
			</div>
		</div>
	</body>
</html>
