@extends('template.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <!-- <section class="areaT"> -->
                        <br>
                          <div class="jumbotron"><cite><h1>Bienvenido {{ Auth::user()->name }}</h1> </cite></div>
                          <article class="nube">
                            <br>
                            <a href="/products"><p>Productos</p></a>

                          </article>

                          <article class="nube">
                            <br>
                            <a href="{{ route('products.create') }}"><p>Agregar Producto</p></a>
                          </article>

                          <article class="nube">
                            <br>
                            <a href="/brands"><p>Marca</p></a>
                          </article>

                          <article class="nube">
                            <br>
                            <a href="/libreria"><p>Salir</p></a>
                          </article>
                        <!-- </section> -->


                        <br>
                        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br> -->
                        <!-- <footer class="pie">

                        </footer> -->





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
