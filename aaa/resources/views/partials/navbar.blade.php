<nav class="navbar navbar-expand-lg navbar-light" style="background-color: grey;">
  <a class="navbar-brand" href="#" style="color:white;">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/products">Productos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products.create') }}">Crear producto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/brands">Brands</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/colors">Colores</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="drop-categories" role="button" data-toggle="dropdown">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="drop-categories">
          @forelse ($categories as $category)
            <a class="dropdown-item" href="#">{{ $category->name }}</a>
          @empty

          @endforelse
        </div>
      </li>
    </ul> -->
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="/login" style="color:white;">Logeate</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="/register" style="color:white;">Registrate</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white; font-size:16px;">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/profile">
                      Ver mi perfil
                  </a>
                  <a class="dropdown-item" href="/products">
                      Productos
                  </a>
                  <a class="dropdown-item" href="{{ route('products.create') }}">
                      Agregar producto
                  </a>
                    <a class="dropdown-item" href="/logout"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </div>
</nav>
