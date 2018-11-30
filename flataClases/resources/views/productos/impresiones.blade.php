@include ('productos.productos_configuracion')
@include ('vendor')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>

    <header>

    <a href="/libreria"><img class="isologotipo" src=imagenes/logo-01.png alt="logo IDEON"></a>

    <nav class="secciones">

    <ul>

      <li><a href="/producto"><strong>PRODUCTOS</strong></a></li>
      <li><a href="/preguntas"><strong>PREGUNTAS FRECUENTES</strong></a></li>
      <li><a href="#"><strong>CARRITOS</strong></a></li>
      <li id="registro"><a href="/registro"><strong>CREAR CUENTA</strong></a></li>
      <li id="registro_2"><a href="/acceso"><strong>ACCEDER</strong></a></li>
      <li id="registro_2"><a href="/perfil"><strong>PERFIL</strong></a></li>

    </nav>

    </nav>

    </ul>

    </nav>

    </nav>

    </header>

<article class="white_section">
  <aside class="product_list">
    <ul>
      <li><strong><a href="/producto-libreria">PRODUCTOS DE LIBRERIA</a></strong></li>
      <li><strong><a href="/producto-diseno">PRODUCTOS DE DISEÑO</a></strong></li>
      <li><strong><a href="/producto-pintura">PRODUCTOS DE PINTURA</a></strong></li>
      <li><strong><a href="/producto-madera">PRODUCTOS DE MADERA</a></strong></li>
      <li><strong><a href="#" style="color: red">IMPRESIONES</a></strong></li>
    </ul>

  </aside>

<aside>

<section class="productos_disponibles">

  <!-- Separador -->

  <div class="producto_contenedor">

  <img src="impresiones_imagenes/papel_satinado.jpg" class="imagenes_productos" alt="papel satinado">

  <div class="productos_descripcion">

    <h4>Satinado</h4>
    <h6>Puede imprimirse en los formatos:</h6><p>A5 - A4 - A3 - A2 </p>
  <br>

  </div>

  </div>


<!-- Separador -->

<div class="producto_contenedor">

<img src="impresiones_imagenes/papel_mate.jpg" class="imagenes_productos" alt="papel mate">

<div class="productos_descripcion">

  <h4>Papel Mate</h4>
  <h6>Puede imprimirse en los formatos:</h6><p>A8 - A7 - A6 - A5 - A4 - A3 - A2 - A1 - A0</p>
<br>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="impresiones_imagenes/papel_ilustracion.jpg" class="imagenes_productos" alt="papel ilustracion">

<div class="productos_descripcion">

  <h4>Papel Ilustración</h4>
  <h6>Puede imprimirse en los formatos:</h6><p>A8 - A7 - A6 - A5 - A4 - A3 - A2 - A1 - A0</p>
<br>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="impresiones_imagenes/papel_fotografico.jpg" class="imagenes_productos" alt="papel fotografico">

<div class="productos_descripcion">

  <h4>Fotografico</h4>
  <h6>Puede imprimirse en los formatos:</h6><p>A8 - A7 - A6 - A5 - A4 - A3 - A2 - A1 - A0</p>
<br>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="impresiones_imagenes/papel_autoadhesivo.jpg" class="imagenes_productos" alt="papel autoadhesivo">

<div class="productos_descripcion">

  <h4>Autoadhesivo</h4>
  <h6>Puede imprimirse en los formatos:</h6><p>A5 - A4 - A3</p>
<br>

</div>

</div>


<!-- Separador -->

<div class="producto_contenedor">

<img src="impresiones_imagenes/papel_couche.jpg" class="imagenes_productos" alt="papel couche">

<div class="productos_descripcion">

  <h4>Autoadhesivo</h4>
  <h6>Papel Couche:</h6><p>A5 - A4 - A3</p>
<br>

</div>

</div>


<!-- Separador -->

</section>

</aside>

</article>

@include ('productos.productos_footer')

  </body>
</html>
